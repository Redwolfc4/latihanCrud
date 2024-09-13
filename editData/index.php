<?php
include('../index.php');
$id = $_GET['id']; // ambil id yang dikirim melalui url
$query = "SELECT id,nama,alamat,umur,jenis_kelamin FROM karyawan WHERE id = $id";
$data = mysqli_query($connect,$query);
echo json_encode($data);
$result = mysqli_fetch_assoc($data);
?>

<html>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $result['id'] ?>">

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="<?= $result['nama'] ?>"><br>

        <label for="alamat">alamat</label><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"><?= $result['alamat'] ?></textarea><br>

        <label for="umur">umur</label><br>
        <input type="text" name="umur" id=" umur" value="<?= $result['umur'] ?>"><br>

        <label for="jenis_kelamin">jenis_kelamin</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki - laki" <?=$result['jenis_kelamin']=='Laki - laki' ? 'selected' : '' ?>>Laki - Laki</option>
            <option value="Perempuan"<?=$result['jenis_kelamin']=='Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select><br>
        
        <button type="submit">Edit</button>
    </form>
</html>
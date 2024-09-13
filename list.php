<?php
include("index.php");
$search = $_GET["search"]??'';
$query = "SELECT * FROM karyawan";
$data = mysqli_query($connect,$query);
$results = mysqli_fetch_all($data,MYSQLI_ASSOC); //num jadi indeks type num, both jadi indeks num dan text
echo memory_get_usage();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan data karyawan</title>
</head>
<body style="text-align:center">
    <a href="tambahData">Tambah Data</a>
    <br><br>
    <form action="./searchData" method="get">
        <input type="text" name="search" id="search" value="<?= $search?>"/>
        <button type="submit">Search</button>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>umur</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php foreach ($results as $result) : ?>
        <tr>
            <td><?= $result['nama'] ?></td>
            <td><?= $result['alamat'] ?></td>
            <td><?= $result['umur'] ?></td>
            <td><?= $result['jenis_kelamin'] ?></td>
            <td><a href="./editData?id=<?= $result['id'] ?>">Edit</a></td>
            <td><a onclick='return confirm("Apakah anda yakin ingin menghapus data ini?");' style="cursor:pointer" href="./deleteData?id=<?= $result['id'] ?>">Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>
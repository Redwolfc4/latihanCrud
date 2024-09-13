<html>
    <form action="insert.php" method="POST">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama"><br>

        <label for="alamat">alamat</label><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>

        <label for="umur">umur</label><br>
        <input type="text" name="umur" id=" umur"><br>

        <label for="jenis_kelamin">jenis_kelamin</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki - laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        
        <button type="submit">ADD</button>
    </form>
</html>
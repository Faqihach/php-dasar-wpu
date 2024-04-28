<?php
require "functions.php";

// mengecek apakah sudah submit
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil ditambahkan')
        document.location.href = 'index.php'
        </script>
        ";
    }
    else {
        echo "
        <script>
        alert('Data Gagal ditambahkan')
        document.location.href = 'index.php'
        </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <h1>Masukkan Data Buku</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="Judul">Judul </label>
            <input type="text" name="Judul" id="Judul" required>
        </li>
    </ul>

    <ul>
        <li>
            <label for="penulis">Penulis  </label>
            <input type="text" name="penulis" id="penulis" required>
        </li>
    </ul>

    <ul>
        <li>
            <label for="tahun_terbit">Tahun terbit  </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit">
        </li>
    </ul>

    <ul>
        <li>
            <label for="penerbit">Penerbit  </label>
            <input type="text" name="penerbit" id="penerbit">
        </li>
    </ul>

    <ul>
        <li>
            <label for="cover">Cover </label>
            <input type="text" name="cover" id="cover">
        </li>
    </ul>
    <button type="submit" name="submit">Tambahkan</button>
    <button type="reset" name="reset">Batal </button>
    </form>
</body>
</html>
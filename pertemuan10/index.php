<?php 
require "functions.php";
$books = query("SELECT * FROM perpustakaan")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MYSQL</title>
</head>
<body>
    <h1>Koleksi Buku</h1>
    <table border="1" cellpadding="5" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>tahun Terbit</th>
        <th>Penerbit</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($books as $book) : ?>
        <tr>
            <td><?= $no ?></td>
            <td><a href="">update | </a>
            <a href="">Delete</a></td>
            <td>
                <img src="img/<?= $book["cover"] ?>" alt="" width="50">
            </td>
            <td><?= $book["Judul"] ?></td>
            <td><?= $book["penulis"] ?></td>
            <td><?= $book["tahun_terbit"] ?></td>
            <td><?= $book["penerbit"] ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach ?>

    </table>

    <a href="formdata.php"> Tambahkan Buku</a>
</body>
</html>
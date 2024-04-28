<?php 
// mengkoneksi dengan database mySQL
$db = mysqli_connect("localhost", "root", "", "phpwpu");

//Ambil data (fetch) dari tabel // query data
$result = mysqli_query($db, "SELECT * FROM perpustakaan");
// var_dump($result);

// 4 cara ambil (fetch) data dari tabel di mySQL:
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiative
// mysqli_fetch_array() // mengembalikan array keduanya
// mysqli_fetch_object() // mengembalikan object

// while ($book = mysqli_fetch_assoc($result)) {
//     var_dump($book);
// }
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
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>id</th>
        <th>Aksi</th>
        <th>Cover</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>tahun Terbit</th>
        <th>Penerbit</th>
    </tr>

    <?php while ($book = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>1</td>
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
    <?php endwhile ?>

    </table>
</body>
</html>
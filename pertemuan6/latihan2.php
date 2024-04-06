<?php
// Associative Array
// Definisi nya sama seperti array numerik, kecuali
// Key-nya string yang kita buat buat sendiri

$mahasiswa = [
    ["nama" => "Robin", 
    "nim" => "19237766", 
    "jurusan" => "Sistem Informasi", 
    "email" => "robinhere@blabla.com"],

    [
    "jurusan" => "Sistem Informasi",
    "nama" => "Maman",
    "email" => "me?maman@blabla.com",
    "nim" => "19230456"] 
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nim : <?= $mhs["nim"] ?></li>
            <li>Prodi : <?= $mhs["jurusan"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>
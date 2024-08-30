<?php 
$mahasiswa = [
    ["Robin", "19230466", "Sistem Informasi", "robindisini@blabla.com"],
    ["Maman", "19230456", "Sistem Informasi", "me?maman@blabla.com"]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>

    <ul>
        <li><?= $mhs[0] ?></li>
        <li><?= $mhs[1] ?></li>
        <li><?= $mhs[2] ?></li>
        <li><?= $mhs[3] ?></li>
    </ul>

    <?php endforeach ?>

</body>

</html>
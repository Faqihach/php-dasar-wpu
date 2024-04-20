<?php
// cek var _GET kosong
if ( !isset($_GET["cover"]) || 
    !isset($_GET["judul"]) ||
    !isset($_GET["id_buku"]) ||
    !isset($_GET["penulis"]) ||
    !isset($_GET["tahun_terbit"]) ||
    !isset($_GET["penerbit"])
    ) {
    # redirect ke latihan1.php
    header("Location: latihan1.php");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail buku</title>
</head>
<body>
    <h1>Detail buku</h1>
        <ul>
            <li><img src="img/<?php echo $_GET["cover"] ?>"></li>
            <li><?= $_GET["id_buku"]?></li>
            <li><?= $_GET["judul"] ?></li>
            <li><?= $_GET["penulis"] ?></li>
            <li><?= $_GET["tahun_terbit"] ?></li>
            <li><?= $_GET["penerbit"] ?></li>
        </ul>
    
    <h4><a href="latihan1.php">Kembali ke Halaman Awal</a></h4>
</body>
</html>
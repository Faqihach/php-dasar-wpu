<?php 
    $books = [[
        "id_buku" => "BK001",
        "judul" => "Perahu Kertas",
        "penulis" => "Dewi Lestari",
        "tahun_terbit" => "2007",
        "penerbit" => "Abadi Jaya",
        "cover" => "img/pk.jpg"
    ],
    [
        "id_buku" => "BK002",
        "judul" => "Laskar Pelangi",
        "penulis"=> "Andrea Hirata",
        "tahun_terbit" => "2004",
        "penerbit" => "Abadi Jaya",
        "cover" => "img/lp.jpg"
    ]]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1> Daftar Buku </h1>
    <?php foreach ( $books as $book ) : ?>
        <ul>
            <li>Id buku : <?php echo $book["id_buku"] ?></li>
            <li>Judul : <?php  echo $book["judul"] ?></li>
            <li>Penulis : <?php  echo $book["penulis"] ?></li>
            <li>Tahun Terbit : <?php echo $book["tahun_terbit"] ?></li>
            <li>Penerbit : <?php echo $book["penerbit"] ?></li>
            <li>
                Cover : <img src="<?php echo $book["cover"] ?>" alt="Sampul Buku">
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>
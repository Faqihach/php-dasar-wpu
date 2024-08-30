<?php 
    $books = [[
        "id_buku" => "BK001",
        "judul" => "Perahu Kertas",
        "penulis" => "Dewi Lestari",
        "tahun_terbit" => "2007",
        "penerbit" => "Abadi Jaya",
        "cover" => "pk.jpg"
    ],
    [
        "id_buku" => "BK002",
        "judul" => "Laskar Pelangi",
        "penulis"=> "Andrea Hirata",
        "tahun_terbit" => "2004",
        "penerbit" => "Abadi Jaya",
        "cover" => "lp.jpg"
    ]]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar judul</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
        <li>
            <a
                href="latihan2.php?cover=<?= $book["cover"]?>&id_buku=<?= $book["id_buku"]?>
                &judul=<?= $book["judul"]?>&penulis=<?= $book["penulis"] ?>&tahun_terbit=<?= $book["tahun_terbit"] ?>&penerbit=<?= $book["penerbit"] ?>"><?= $book["judul"]; ?></a>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>
<?php 
// Menampilkan array dengan pengulangan
// for / foreach

$angka = [1,2,5,7,33,5,7,90];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            float: left;
            text-align: center;
            line-height: 50px;
            margin: 5px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- for -->
    <?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- foreach -->
    <?php foreach ( $angka as $a ) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach ?>
</body>
</html>
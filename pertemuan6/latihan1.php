<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: deeppink;
        float: left;
        text-align: center;
        line-height: 50px;
        margin: 7px;
        transition: 1s;
    }

    .clear {
        clear: both;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <?php foreach ( $angka as $agk1 ) : ?>

    <?php foreach ( $agk1 as $agk2 ) : ?>
    <div class="kotak"><?= $agk2 ?></div>
    <?php endforeach ?>

    <div class="clear"></div>
    <?php endforeach ?>
</body>

</html>
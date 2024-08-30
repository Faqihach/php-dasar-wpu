<?php
// PERTEMUAN - 3
// PERULANGAN
// for;
// while;
// do.. while;
// foreach

//  PERCABANGAN / PENGKONDISIAN
// if;
// if else if;
// switch;

// perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Hello World <br>";
}

// perulangan while
$i = 0;
while ($i < 5) {
    echo "Hello World <br>";
    $i++;
}

// perulangan do.. while (do.. while akan menctak sekali dulu)
$i = 10;
do {
    echo "Hello World <br>";
    $i++;
} while ($i < 5);


// PERCABANGAN / PENGKONDISIAN 
$x = 30;
if ($x < 20) {
    echo "Benar";
} else if ($x === "30") {
    echo "Tepat";
} else {
    echo "Salah";
}

// TERNARY OPERATOR 
$j = 5;
echo $j > 10 ? "benar" : "Salah";

echo "<br>";

// NULL COALESCING OPERATOR (MENGECEK APAKAH ITU NULL)
$nilai = "";
echo $nilai ?: "benar";
?>
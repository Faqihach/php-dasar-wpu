<?php 

// cara buat array
// cara lama
$hari = array("senin", "selasa","rabu");
//cara baru 
$arr1 = [123, "kamis", true, false];
//menampilkan array 
var_dump($hari);
echo "<br>";
// var_dump() / print_r()
print_r($arr1);
//Menampilkan 1 elemen array
echo $arr1[1];
echo "<br>";
//menambahkan elemen baru pada array
$hari[] = "jum'at";
var_dump($hari);


?>
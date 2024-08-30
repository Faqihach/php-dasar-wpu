<?php
// PERTEMUAN - 2 (Sintaks php)
// komen satu baris 

/* komen lebih dari satu baris */
// string bisa pake " atau '
// (") bisa menggunakan (interpolasi = menampilkan isi variable di dlm string)
// $nama = "Dudung";
// echo "Halo, nama saya $nama\n";

// output standar
// echo
// print
// print_r()
// var_dumb

// echo "Hello world\n"; 
// echo 1234,"\n";
// echo true;
// echo false, "\n";

// penulisan sintaks php :
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// variabel dan tipe data
// variabel ($)
// tidak boleh diawali angka tapi boleh mengandung angka, jgn pake spasi
// $nama = "maman";
// echo $nama

// Operator yg ada di PHP:

//aritmatika (+, -, *, /, %)
// $angka = 1 + 2;
// echo $angka

// penggabung string / concatenation / concate (.)
// $first_name = "John";
// $last_name = "Doe";
// echo $first_name . " " . $last_name

// assignment (=, +=, -=, *=,)
// $x = 2;
// $x += 3;
// echo $x

// Perbandingan (<, >, <= , >= ,==, !=)
// $hasil = 1 == "1";
// var_dump($hasil)

// Identitas (===, !==) membandingkan tipe datanya juga
// $hasil = 5 === "6";
// var_dump($hasil);
// echo "<br>";

// logika (&&, ||, !)
$angka = 5;
var_dump($angka < 10 || $angka % 2 == 0);
?>
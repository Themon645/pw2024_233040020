<?php
// 1. membuat array
$hari = array ("senin", "selasa", "rabu");
$bulan = ["januari","februari","maret"];
$mahasiswa = ["sandhika", 3.1, false];

// 2. mencetak isi array
// mencetak 1 nilai pada array, menggunkan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// cetak semua isi array
// var_dump() atau print_r()
// gunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3. memanipulasi isi 
// menambah isi array
// di akhir: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "april","mei");
print_r($bulan);
echo "<br>";

// di awal: array_unshift()
array_unshift($mahasiswa, "233040020");
print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// di belakang: array_pop();
// di depan :array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);


<?php 
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh tipe data yang berbeda
//pasangan key dan value
//key nya adalah index yang di mulai dari 0
//membuat array cara lama

 $hari = array("senin", "selasa", "rabu");

 $bulan = ["januari", "feb", "maret"];

// menampilkan array
 // var_dump / print_r

// var_dump($hari);

// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array

// echo $bulan[2];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";

var_dump($hari)


 ?>
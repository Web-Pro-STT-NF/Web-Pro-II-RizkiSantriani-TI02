<?php
// membuat variable user
$nama = "Rizki Santriani";
$umur = 21;
$berat = 70.2;

// menampilkan variable
echo "Nama : " . $nama;
echo "<br/>Umur : $umur";
echo "<br/>Berat : $berat";

// menampilkan variable sistem
echo "<br/>Document Root : " . $_SERVER
['DOCUMENT_ROOT'];

// membuat variable constant
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;

// menampilkan varable constant
echo "<br/>Luas Lingkaran : $luas";


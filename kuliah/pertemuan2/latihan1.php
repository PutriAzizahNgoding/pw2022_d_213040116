<?php 
   // pertemuan 2, belajar mengenai sintaks PHP
   // echo untuk mencetak nilai ke layar 
echo (1 + 2) * 3 / 4;
echo "<hr>";

// OPERATOR
//Aritmatika
//+,-,*,/,%

echo 5 % 2; // sisa bagi
echo "<hr>";

// Perbandingan
// <,>,<=,>=,==,!=
echo 10 != 20;
echo "<hr>";

//variabel
// tempat menampung nilai
// tidak boleh mengandung spasi
// boleh mengandung angka, tidak boleh diawal
// snake_case : $nama_depan_mahasiswa(phython)
// camelCase : $namaDepanMahasiswa(js)
// kebab-case : nama-depan-mahasiswa (css)
$nama = 'sandhika';
echo $nama;
echo "<hr>";

$x = 1;
$y = 2;
$z = $x + $y;
echo $z;
echo "<hr>";


$a = 10;
$a = 20;
$a = 30;
echo $a;
echo "<hr>";
// Penugasan/Assignment
// =, +=, -=, *=, /=, %=
$a = 10;
$a += 20;
$a += 30;
echo $a;
echo "<hr>";

//Increment & Decrement
// ++, --
$b = 10;
$b++;
echo $b;
echo "<hr>";

$b = 10;
$b--;
echo $b;
echo "<hr>";

$b = 10;
echo $b++;
echo "<hr>";

$b = 10;
echo ++$b;
echo "<br>";
echo --$b;
echo "<hr>";


// Identitas, mengecek apakah tipe datanya sama atau tidak pada perbandingan
// ===, !==
echo 10 === "10";


// ' back tick
// ~ tilde
// # pound
// ^ caret
// | pipe
// \ backslash
// / slash

?>
<?php 
   // pertemuan 2 dikelas, belajar mengenai sintaks PHP
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
$nama = 'Putri';
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


// pertemuan 2 dari youtube
// mengenai sintaks dasar PHP
/* komentar adalah sintaks pemrograman yang tidak akan dieksekusi
berfungsi untuk menjelaskan fungsi dari baris2 kodenya
*/
//standar output
/* sebuah perintah di PHP yang digunakan untuk
menampilkan sesuatu ke layar atau mencetak sesuatu ke layar
*/
// echo, print (biasa digunakan untuk mencetak string,variabel,tulisan)
// print_r(khusus untuk mencetak array)
/* var_dump(biasa digunakan untuk melihat isi dari variabel
akan menampilkan informasi mengenai variabel tersebut)*/

echo "Putri Azizah"; //akan mencetak sebuah string atau tulisan ke layar
echo "<hr>";

var_dump("Putri Azizah");
echo "<hr>";
 /* output string(12) "Putri Azizah"
 artinya var_dump akan memberikan informasi
 tidak hanya apa yang ditampilkannnya saja, tapi
 akan memberikan juga informasi yang ditampilkannya itu
 tipe datanya apa dan ukurannya berapa
 */

 // Penulisan sintaks PHP
 //1. PHP di dalam HTML
 /*<h1>Halo, Selamat Datang <?php echo "Putri";?></h1>
<p><?php echo "ini adalah paragraph"; ?></p>*/
//2. HTML di dalam PHP
/*<?php 
        echo "<h1>Halo, Selamat Datang Sandhika</h1>"
     ?>   */


// variabael dan Tipe data
// variabel, digunakan untuk menampung sebuah nilai
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// tidak menggunakan spasi tapi underscore

$nama = "Putri Azizah"; //memasukkan tulisan Putri ke variabel nama
echo "Halo, nama saya $nama"; 
echo "<hr>";
/*jika menggunakan kutip dua
bisa menggunakan konsep yang namanya interpolasi, dimana itu
 adalah untuk mengecek apakah didalam kutip 2 atau didalam string
 terdapat variabel atau tidak, jika iya akan menampilkan isi
 variabel nya
 output dari echo diatas: Halo, nama saya Putri Azizah */
 /* jika menggunakan kutip 1(tidak ada interpolasinya) maka yang tampil adalah 
 Halo, nama saya $nama, jadi yang tampil adalah variabelnya bukan isinya
  */

  // Operator
  //aritmatika
  // + - * / %
 echo 1 + 1;
 echo "<hr>";
$x = 10;
$y = 20;
echo $x * $y;
echo "<hr>";

// penggabung string/concatenation/concat
// .
$nama_depan = "Putri";
$nama_belakang = "Azizah";
echo $nama_depan." ".$nama_belakang;
echo "<hr>"

// Assignment (operator penugasan)
// =, +=, -=,*=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// output 6

// $x = 1;
// $x -= 5;
// echo $x;
// outputnya -4

// $nama = "Putri";
// $nama .= " ";
// $nama .= "Azizah";
// echo $nama;
// output : Putri Azizah

// operator perbandingan
// <,>, <=, >=, ==, !=
// tidak mengecek tipe datanya, tetapi nilainya sama tidak
//biasa digunakan membuat pengkondisian
// var_dump(1 < 5);
// output : bool(true)

// var_dump(1 > 5);
// output: bool(false)

// var_dump(1 == 5);
// output: bool(false)

// var_dump(1 == "1");
// output: bool(true)

// operator identitas
//akan mengecek tipe datanya juga
// ===, !==

// var_dump(1 === "1");
// output:  bool(false),karena tipe datanya berbeda

// operator logika
// &&, ||, ! (AND,OR,NOT)
// bisa digunakan untuk pengkondisian

// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
// output: bool(true), karena dua kondisi perbandingan ini harus
// bernilai true apabila menggunakan logika AND

// $x = 30;
//  var_dump($x < 20 && $x % 2 == 0);
//  output: bool(false), karena harus bernilai benar keduanya

// $z = 30;
//  var_dump($x < 20 || $x % 2 == 0);
// output: bool(true), jika menggunakan OR maka jika yang bernilai benar 
// salah satunya maka true

?>
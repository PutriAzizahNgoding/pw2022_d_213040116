<?php 
// Pertemuan 5 - Array (di kelas)
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus


$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

// membuat array
$hari = ["Senin", "Selasa", "Rabu","Kamis"]; // versi baru
$bulan = array("Januari", "Februari", "Maret"); // versi lama

// mencetak array
// menggunakan index, dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

// menggunakan var_dump() atau print_r()
// hanya untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak untuk user
// menggunakan looping
// for($i = 0; $i < 5; $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }

for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// menggunakan foreach
// pengulangan khusus array

foreach($bulan as $bln){
    echo $bln;
    echo "<br>";
}

echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<br>";
$bulan[] = "April";
$bulan[] = "Mei";
print_r($bulan);
echo "<br>";

?>


<?php 
// pertemuan 5 mengenai array ( materi youtube WPU)

// Array adalah sebuah variabel yang bisa menampung lebih dari satu nilai

// variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0



// [0] adalah index elemen pada array nya
// tiap-tiap elemen pada array pasti punya indeks
// index nya adalah angka yang dimulai dari 0


// ada 2 cara membuat array
// cara lama 
// nilai yang ada didalam array disebut dengan element
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array ke layar
// bisa menggunakan var_dump() atau print_r() 

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl1[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis"; // menambahkan kamis di akhir array yang telah dibuat
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


 ?>

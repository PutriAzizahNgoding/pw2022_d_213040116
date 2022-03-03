<?php 
// pertemuan 4 mengenai date dan function

// memanggil sebuah function
// ada function yang harus menggunakan parameter/argument
// butuh minimal 1 parameter

// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l");// menampilkan hari saja
echo "<hr>";
echo date("d"); // menampilkan tanggal
echo "<hr>";
echo date("M"); // menampilkan bulan
echo "<hr>";
echo date("m"); // menampilkan bulan dalam bentuk angka
echo "<hr>";
echo date("l, d-M-Y");// membuat tanggal yang sesuai formatnya lengkap
echo "<hr>";

// Time

echo time(); // output : 1646316347, jika di refresh berubah-ubah angkanya
echo "<hr>";
// Untuk time boleh tidak menggunakan parameter, asal kurung tetap dibawa
// UNIX Timestamp / EPOCH time
// asal mula waktu di dunia komputer
// 1,6 miliar itu adalah detik yang sudah berlalu sejak 1 januari 1970 sampai saat ini

// menggabungkan 2 function sekaligus
echo date("l",time()+60*60*24*100); //100 hari lagi hari apa
echo "<hr>";
echo date("l",time()-60*60*24*100); // 100 hari kebelakang hari ini-100 hari belakang
echo"<hr>";
echo date("d M Y",time()+60*60*24*100);
echo "<hr>";

//mktime
// untuk membuat sendiri detik yang sudah berlalu
// parameternya ada 6 angka. mktime(0,0,0,0,0,0)
// urutannya,dimulai dari 0 pertama
// jam, menit, detik, bulan, tanggal, tahun

echo mktime(0,0,0,8,25,1985);
echo "<hr>";
echo date("l", mktime(0,0,0,8,25,1985));
echo "<hr>";

// strtotime
// kebalikan dari mktime, memasukkan format tanggal nanti keluarnya detik
 echo strtotime("25 aug 1985"); // ouput:493768800
 echo "<hr>";
 echo date("l", strtotime("25 aug 1985")); // output: Sunday

?>
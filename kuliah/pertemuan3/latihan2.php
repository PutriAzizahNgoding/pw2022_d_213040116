<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

/* for
didalam for terdapat 3 bagian: inisialisasi,kondisi terminasi,increment/decrement
 inisialisasi adalah menentukan varibel awal untuk pengulangannya.
 kondisi terminasi digunakan untuk memberhentikan pengulangannnya.
 increment/decrement agar pengulangannya bisa maju atau mundur
 cek kondisi terlebih dahulu baru jalankan */

for($i = 0; $i < 5; $i++){   // output: Hello World! sebanyak 5x
     echo "Hello World! <br>";
 }


//while
 $j = 0;
 while($j < 5 ){ //pada while sama seperti for hanya berbeda posisi saja 
    echo "Hello World! <br>";
    
     $j++; // jangan sampai lupa karena akan terjadi looping forever
     echo "<br>";
 }
 

/* do..while
artinya, lakukan hal ini selama kondisi bernilai true,
jalankan dahulu baru cek kondisinya */

$x = 0;
do {
echo "Hello World!";
 $x++;
} while ($x < 5);

 // untuk do while,jika kondisi bernilai false, maka bloknya akan dijalankan terlebih dahulu satu kali
 // kalau while tidak akan dijalankan kalau kondisinya false


/*  <?php
<table border="1" cellpadding="10" cellspacing="0">
for($i = 1; $i <= 3; $i++){ //mengulang membuat baris
echo "<tr>";
for($j = 1; $j <= 5; $j++){ //mengulang kolomnya atau <td>
 echo "<td>$i, $j</td>";
}
 echo "</tr>";
  } 
</table> */


/* sintaks gaya template-ing
memisahkan sesuatu yang mau tampilkan mnenggunakan PHP dengan tag PHP
tapi begitu yang mau kita tampilkan adalah tag html jangan disimpan
dalam tag php, keluarkan saja
<?php for($i = 1; $i <= 3; $i++) : ?> menampilkan 3 baris
    <tr>
        <?php for($j = 1; $j <= 5; $j++): ?> menampilkan 5 kolom
            <td><?php echo "$i,$j"; ?></td>
      <?php enfor; ?>
    </tr>
<?php endfor;?>
kurung kurawal for adalah endfor, kurung kurawal if adalah ifend
kurung kurawal foreach adalah endforeach
*/

/* ada cara untuk menyingkat ketika ingin menampilkan
 isi dari sebuah variabel. jika memiliki tag php yang isinya
 hanya melakukan echo terhadap suatu variabel seperti:
<?php echo "$i, $j"; ?> pada php echo nya bisa diganti dengan
<?= "$i, $j"; ?> ini artinya kalo nemu <?= itu artinya sama dengan
<?php echo. fungsinya memang untuk mencetak seperti "$i,$j" boleh
string atau variabel atau apapun
*/
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
      .warna-baris {
        background-color: silver ;
      }
    </style>
</head>
<body>
      
    <table border="1" cellpadding="10" cellspacing="0">
      <?php for($i = 1; $i <= 5; $i++) : ?> 
        <?php if( $i % 2 == 0 ) : ?> 
            <tr class="warna-baris">
          <?php else : ?>
          <tr>
        <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++): ?>
                    <td><?php echo "$i,$j"; ?></td>
              <?php endfor; ?>
            </tr>
      <?php endfor;?> 
    </table>
    <hr>
</body>
</html>

<?php
/*pengkondisian atau percabangan
 untuk menentukan apa yang akan terjadi ketika kita membuat pernyataan, 
 jika pernyataan tersebut bernilai true apa yang akan terjadi
ketika pernyataan tersebut bernilai false apa yang akan terjadi */

// ada if else
// if else if else
// ternary, untuk mengganti if else yang sederhana
/* switch, digunakan ketika sudak memiliki if else yang sudah
terlalu banyak,dapat diringkas menggunakan switch */

 // untuk if, tanda()untuk memasukkan kondisi
$x = 10;
if( $x < 20 ){
   echo "benar";
   echo "<hr>";
} 

// percabangan
 $x= 10;
 if( $x < 20 ){
 echo "benar <br>"; // jika benar jalankan baris ini
 echo "<hr>";
 } else { 
  echo "salah"; // jika selain itu maka jalankan ini
  
}

// penggunaan if elseif else
$x = 30;
if( $x < 20 ){
  echo "benar"; 
} else if($x == 20){
  echo "bingo!";
} else { 
  echo "salah"; // menampung apapun selain kondisi diatas
}

?>
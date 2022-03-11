<?php 
// array Multidimensi (materi di kelas)
// array di dalam array

// $array1 = [10,"Sandhika", true,[1,2,3]];
//     print_r($array1);
//     echo "<hr>";
//     echo $array1[3][1]; // memanggil array terakhir

// array dalam array ada array lagi
    $array1 = [10,"Sandhika", true,[1,[2],3]];
    print_r($array1);
    echo "<hr>";
    // mencetak angka 2
    echo $array1[3][1][0];

    // matriks
    /*
    1 2 3
    4 5 6
    7 8 9
    */
    // $matriks = [[1,2,3],[4,5,6],[7,8,9]];

    $matriks = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    echo "<hr>";


    // foreach($matriks as $baris) {
    //     print_r($baris);
    //     echo "<br>";
    // }

    foreach($matriks as $baris) {
        foreach ($baris as $kolom) {
            echo $kolom;
        }
        echo "<br>";
    }

    echo "<hr>";
?>


<?php 
// Pengulangan pada Array (materi youtube WPU)

// For / foreach
$angka = [3,2,15,20,11,77,89];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

		.clear { clear: both; }

	</style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++) { // count untuk menghitung berapa sih jumlah elemen pada variabel ?> 
		<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a) : ?>	
	<div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?>

</body>
</html>
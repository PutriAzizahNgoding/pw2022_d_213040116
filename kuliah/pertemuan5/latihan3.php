<?php 
// Representasi Data Mahasiswa (materi di kelas)

$mahasiswa = [
["Putri Azizah Qudsiyah", "213040116","putriazizahqudsiyah@gmail.com", "Teknik Informatika"],
["Raisa Isna Ainun", "213040112", "raisaisna@gmail.com", "Teknik Informatika"],
["Rika Febriyanti", "213040125","rikafebriyanti@gmail.com", "Teknik Informatika"],
["Vina Nur Fauziah", "213040115", "vinanurfauziah@gmail.com", "Teknik Informatika"]
];

print_r($mahasiswa);

?>

<?php foreach($mahasiswa as $mhs) { // bisa pake :?>
<ul>
    <li>Nama :<?php echo $mhs[0];?></li>
    <li>NPM : <?php echo $mhs[1]; ?></li>
    <li>Email :<?php echo $mhs[2]; ?></li>
    <li>Jurusan :<?php echo $mhs[3];?></li>
</ul>
<?php } // bisa pake endforeanch ?> 


<?php 
// array multidimensi (materi youtube WPU)
// array didalam array
// array numerik
// array numerik adalah array yang index-nya angka
$mahasiswa = [
	["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
	["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
	["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul>
 	<!--<?php // foreach ($mahasiswa as $mhs) : ?>
 			<li><?= $mhs; ?></li>
 		<?php // endforeach; ?> -->

 		<li>Nama : <?= $mhs[0]; ?></li>
 		<li>NRP : <?= $mhs[1]; ?></li>
 		<li>Jurusan :<?= $mhs[2]; ?></li>
 		<li>Email : <?= $mhs[3]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>

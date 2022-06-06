<?php  
include "../config/koneksi.php";

$sql = "SELECT * FROM tbl_siswa";
$siswa = mysqli_query($conn, $sql);

$jumlah_siswa = 0;
if (mysqli_num_rows($siswa) > 0) {
    $jumlah_siswa = mysqli_num_rows($siswa);
}

$sql = "SELECT * FROM tbl_guru";
$guru = mysqli_query($conn, $sql);

$jumlah_guru = 0;
if (mysqli_num_rows($guru) > 0) {
    $jumlah_guru = mysqli_num_rows($guru);
}

$sql = "SELECT * FROM tbl_mapel";
$mapel = mysqli_query($conn, $sql);

$jumlah_mapel = 0;
if (mysqli_num_rows($mapel) > 0) {
    $jumlah_mapel = mysqli_num_rows($mapel);
}

$sql = "SELECT * FROM tbl_kelas";
$kelas = mysqli_query($conn, $sql);

$jumlah_kelas = 0;
if (mysqli_num_rows($kelas) > 0) {
    $jumlah_kelas = mysqli_num_rows($kelas);
}
?>

<div class="item guru">
	<div class="icon-user">
		<i class="fa fa-users fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Guru</h3>
		<p class="data"><?php echo $jumlah_guru?></p>	
	</div>
</div>
<div class="item siswa">
	<div class="icon-user">
		<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Siswa</h3>
		<p class="data"><?php echo $jumlah_siswa?></p>
	</div>
</div>
<div class="item mapel">
	<div class="icon-user">
		<i class="fa fa-book fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Mata Pelajaran</h3>
		<p class="data"><?php echo $jumlah_mapel?></p>
	</div>
</div> 
<div class="item kelas">
	<div class="icon-user">
		<i class="fa fa-building fa-4x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<h3>Kelas</h3>
		<p class="data"><?php echo $jumlah_kelas?></p>	
	</div>
</div>  


<?php	
	$id_lama = $_POST['id_lama'];	
    $mapel = $_POST['mapel'];
	$kelas = $_POST['kelas'];	
	$hari = $_POST['hari'];	
	$j_masuk = $_POST['j_masuk'];	
	$j_keluar = $_POST['j_keluar'];
	
	echo $id_lama;
	echo $kelas;
	echo $hari;
	include "../../config/koneksi.php";

	$query = "UPDATE tbl_jadwal SET id_kelas='$kelas',id_mapel='$mapel', hari='$hari', jam_masuk ='$j_masuk', jam_keluar ='$j_keluar' WHERE id_jadwal='$id_lama'";	
    $res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		echo "<script>alert('Data berhasil diubah!'); 
				window.location.href='../halaman_admin.php?page=jadwal_mengajar';</script>";	
	}
	else{		
		echo "<script>alert('Data gagal diubah!'); 
				window.location.href='../halaman_admin.php?page=jadwal_mengajar';</script>";	
	}	
?>
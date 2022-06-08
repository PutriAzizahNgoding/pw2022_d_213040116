<?php	
	$id_guru = $_POST['guru'];
	$id_mapel = $_POST['mapel'];	
	$id_kelas = $_POST['kelas'];	
	$hari = $_POST['hari'];	
	$j_masuk = $_POST['j_masuk'];	
	$j_keluar = $_POST['j_keluar'];
	
	echo $j_masuk;
	echo $j_keluar;

	$error = 1;
	if($j_masuk < $j_keluar){
		include "../../config/koneksi.php";

		$cek_query = "SELECT * FROM tbl_mengajar WHERE id_mapel ='$id_mapel' AND id_guru = '$id_guru'";
		$result = mysqli_query($conn, $cek_query);
		
		if (mysqli_num_rows($result) == 0) {				
			$query = "INSERT INTO tbl_mengajar VALUES (null,'$id_guru', '$id_mapel')";
			$res = $conn->query($query);
			
			$query_jadwal = "INSERT INTO tbl_jadwal VALUES (null,'$id_guru', '$id_mapel', '$id_kelas', '$hari', '$j_masuk', '$j_keluar')";
			$res_jadwal = $conn->query($query_jadwal);
			mysqli_close($conn);
			
			echo $res;
			echo $res_jadwal;
			
			if($res_jadwal AND $res){
				$error = 0;
				echo "<script>alert('Data Berhasil ditambahkan!'); 
				window.location.href='../halaman_admin.php?page=jadwal_mengajar';</script>";	
			}				
		}				
	}	
	if($error == 1)
	echo "<script>alert('Data Gagal ditambahkan!'); 
	window.location.href='../halaman_admin.php?page=jadwal_mengajar';</script>";		
	
?>
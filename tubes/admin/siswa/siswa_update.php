<?php	
	require 'upload_foto_siswa.php';
	$nis_lama = htmlspecialchars($_POST['nis_lama']);	
	$nis = htmlspecialchars($_POST['nis']);
	$nama_siswa = htmlspecialchars($_POST['nama_siswa']);
	$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$kelas = $_POST['kelas'];	
	$password = htmlspecialchars($_POST['password']);
	$fotoLamaSiswa = htmlspecialchars($_POST['fotoLamaSiswa']);
	
	if($_FILES['foto_siswa']['error'] === 4) {
		$foto_siswa = $fotoLamaSiswa;
	} else {
		$foto_siswa = upload();
	}


	echo $kelas;
	include "../../config/koneksi.php";

	$query = "UPDATE tbl_siswa SET nis='$nis',nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin',
	 alamat ='$alamat', id_kelas ='$kelas',foto_siswa='$foto_siswa', password_siswa='$password'WHERE nis='$nis_lama'";	
    $res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		echo "<script>alert('Data berhasil diubah!'); 
        window.location.href='../halaman_admin.php?page=siswa';</script>";		
	}
	else{		
		echo "<script>alert('Data gagal diubah!'); 
        window.location.href='../halaman_admin.php?page=siswa';</script>";		
	}	
?>
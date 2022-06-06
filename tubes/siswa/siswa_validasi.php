<?php
	session_start();
	$nis = $_POST['nis'];
	$password = $_POST['password'];

	include "../config/koneksi.php";
	$query = "SELECT * FROM tbl_siswa WHERE nis='$nis' AND password_siswa='$password'";

	$res = $conn->query($query);

	if($row = $res->fetch_row()){
		echo $row[1];

		$_SESSION['logged-in'] = true;
		$_SESSION['nis'] = $row[0]; 
		$_SESSION['username'] = $row[1];
		header('Location: halaman_siswa.php?page=dashboard');
	}
	else{
		$_SESSION['salah'] = 'salah';
		header('Location: login.php');
	}	
?>
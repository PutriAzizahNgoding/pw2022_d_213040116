<?php
	include "../../config/koneksi.php";
	if(isset($_GET['id'])){		
		$id = $_GET['id'];	
		$id_kelas = $_GET['kelas'];	
		
        // $sql = "DELETE FROM tbl_siswa WHERE id_siswa='$id'" or die(mysqli_error($conn));
		// $res = $conn->query($sql);		

	
        // $sql = "DELETE FROM tbl_siswa WHERE id_kelas='$id_kelas'" or die(mysqli_error($conn));
        // $res = $conn->query($sql);
		// mysqli_close($conn);
        $sql = "DELETE FROM tbl_siswa WHERE id_siswa='$id' AND id_kelas ='$id_kelas'";  
        $res = $conn->query($sql);
		mysqli_close($conn);
	
		if($res){		
		  	header("location:../halaman_admin.php?page=siswa&siswa=".$id);
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>
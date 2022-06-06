<?php
	include "../../config/koneksi.php";
	if(isset($_GET['id'])){		
		$id = $_GET['id'];	
		$id_guru = $_GET['guru'];	
		$id_mapel = $_GET['mapel'];	
		
		$sql = "DELETE FROM tbl_jadwal WHERE id_jadwal='$id'";
		$res = $conn->query($sql);		

		 // Delete Mengajar
        $sql = "DELETE FROM tbl_mengajar WHERE id_mapel='$id_mapel' AND id_guru ='$id_guru'";  
        $res = $conn->query($sql);
		mysqli_close($conn);
	
		if($res){		
		  	header("location:../halaman_admin.php?page=jadwal_mengajar&guru=".$id_guru);
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>
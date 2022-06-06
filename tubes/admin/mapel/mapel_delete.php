<?php 
    include "../../config/koneksi.php";
    if(isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo $id;

        $sql = "DELETE FROM tbl_mapel WHERE id_mapel = '$id'" or die(mysqli_error($conn));

        if($conn->query($sql) === TRUE) {
		
            header("location:../halaman_admin.php?page=mapel");
         
        } else {
		
			echo "Error: " . $sql . "<br>" . $conn->error;
        
        }
    }


?>
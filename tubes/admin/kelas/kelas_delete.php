<?php 
    include "../../config/koneksi.php";
    if(isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo $id;

        $sql = "DELETE FROM tbl_kelas WHERE id_kelas = '$id'" or die(mysqli_error($conn));

        if($conn->query($sql) === TRUE) {
		
            header("location:../halaman_admin.php?page=kelas");
         
        } else {
		
			echo "Error: " . $sql . "<br>" . $conn->error;
        
        }
    }


?>
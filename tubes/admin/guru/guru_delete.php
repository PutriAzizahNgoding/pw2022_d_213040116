<?php 

    include "../../config/koneksi.php";
    if(isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo $id;

        $sql = "DELETE FROM tbl_guru WHERE id_guru = '$id'" or die(mysqli_error($conn));

        if($conn->query($sql) === TRUE) {
		
            echo "<script>alert('Data Berhasil dihapus!'); 
        window.location.href='../halaman_admin.php?page=guru';</script>";
         
        } else {
		
            echo "<script>alert('Data Gagal dihapus!'); 
            window.location.href='../halaman_admin.php?page=guru';</script>";
        
        }
    }


?>
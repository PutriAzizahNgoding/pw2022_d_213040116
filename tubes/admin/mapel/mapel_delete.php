<?php 
    include "../../config/koneksi.php";
    if(isset($_GET['id']) ) {
        $id = $_GET['id'];
        echo $id;

        $sql = "DELETE FROM tbl_mapel WHERE id_mapel = '$id'" or die(mysqli_error($conn));

        if($conn->query($sql) === TRUE) {
		
            echo "<script>alert('Data berhasil dihapus!'); 
            window.location.href='../halaman_admin.php?page=mapel';</script>";
         
        } else {
		
            echo "<script>alert('Data gagal dihapus!'); 
            window.location.href='../halaman_admin.php?page=mapel';</script>";
        
        }
    }


?>
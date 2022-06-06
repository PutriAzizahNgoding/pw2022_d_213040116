<?php

    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $nama_kelas = htmlspecialchars($_POST['nama_kelas']);
    $kode_lama =  htmlspecialchars($_POST['kode_lama']);
   
    include "../../config/koneksi.php";

    $query = "UPDATE tbl_kelas SET 
              kode_kelas='$kode_kelas',nama_kelas ='$nama_kelas' 
              WHERE kode_kelas = '$kode_lama'";

    $result = $conn -> query($query)or die(mysqli_error($conn));

    if($result) {
        header("location:../halaman_admin.php?page=kelas");
    }else {
        header("location:../halaman_admin?page=kelas&status=error");

    }

?>
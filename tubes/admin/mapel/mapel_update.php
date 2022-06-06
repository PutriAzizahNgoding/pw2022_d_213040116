<?php

    include "../../config/koneksi.php";

    $kode_lama = htmlspecialchars($_POST['kode_lama']);
    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nama_mapel = htmlspecialchars($_POST['nama_mapel']);
    $semester = htmlspecialchars($_POST['semester']);

   
    $query = "UPDATE tbl_mapel SET 
              kode_mapel='$kode_mapel',nama_mapel ='$nama_mapel',semester='$semester'
              WHERE kode_mapel = '$kode_lama'";

    $result = $conn -> query($query)or die(mysqli_error($conn));

    if($result) {
        header("location:../halaman_admin.php?page=mapel");
    }else {
        header("location:../halaman_admin?page=mapel&status=error");

    }

?>
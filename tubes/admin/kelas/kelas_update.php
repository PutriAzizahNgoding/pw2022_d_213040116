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
        echo "<script>alert('Data berhasil diubah!'); 
        window.location.href='../halaman_admin.php?page=kelas';</script>";
    }else {
        echo "<script>alert('Data gagal dihapus!'); 
            window.location.href='../halaman_admin.php?page=kelas';</script>";

    }

?>
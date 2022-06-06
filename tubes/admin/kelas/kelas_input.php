<?php 

    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $nama_kelas = htmlspecialchars($_POST['nama_kelas']);
  
    include "../../config/koneksi.php";
    $query = "INSERT INTO tbl_kelas VALUES ('','$kode_kelas','$nama_kelas')";

    $result = $conn->query($query) or die(mysqli_error($conn));

    if($result) {
        header("location:../halaman_admin.php?page=kelas");

    } else {
        header("location:../halaman_admin.php?page=kelas&status=error"); 

    }


?>
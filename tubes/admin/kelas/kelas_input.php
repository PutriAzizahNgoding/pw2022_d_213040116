<?php 

    $kode_kelas = htmlspecialchars($_POST['kode_kelas']);
    $nama_kelas = htmlspecialchars($_POST['nama_kelas']);
  
    include "../../config/koneksi.php";
    $query = "INSERT INTO tbl_kelas VALUES ('','$kode_kelas','$nama_kelas')";

    $result = $conn->query($query) or die(mysqli_error($conn));

    if($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=kelas';</script>";

    } else {
        echo "<script>alert('Data gagal ditambahkab!'); 
        window.location.href='../halaman_admin.php?page=kelas';</script>";

    }


?>
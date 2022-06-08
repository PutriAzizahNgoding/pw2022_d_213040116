<?php 

    include "../../config/koneksi.php";

    $kode_mapel = htmlspecialchars($_POST['kode_mapel']);
    $nama_mapel = htmlspecialchars($_POST['nama_mapel']);
    $semester = htmlspecialchars($_POST['semester']);
    

    $query = "INSERT INTO tbl_mapel VALUES (null,'$kode_mapel','$nama_mapel','$semester')";

    $result = $conn->query($query) or die(mysqli_error($conn));

    if($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=mapel';</script>";

    } else {
        echo "<script>alert('Data gagal ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=mapel';</script>";

    }


?>
<?php 

    require 'upload_foto_siswa.php';

    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama_siswa']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $id_kelas = htmlspecialchars($_POST['kelas']);
    $password = htmlspecialchars($_POST['password']);
   
    $foto_siswa = upload();
    if(!$foto_siswa) {
        return false;
    }

    include "../../config/koneksi.php";
    $query = "INSERT INTO tbl_siswa VALUES ('','$nis','$nama','$jenis_kelamin','$alamat','$id_kelas','$foto_siswa','$password')";

    $result = $conn->query($query) or die(mysqli_error($conn));

    if($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=siswa';</script>";

    } else {
        echo "<script>alert('Data gagal ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=siswa';</script>"; 

    }


?>
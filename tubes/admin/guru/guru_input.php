<?php 

	require 'upload_foto.php';

    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama_guru']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    
    $foto_guru = upload();
    if(!$foto_guru) {
        return false;
    }


    include "../../config/koneksi.php";
    $query = "INSERT INTO tbl_guru VALUES ('','$nip','$nama','$alamat','$jenis_kelamin','$tempat_lahir',
    '$tanggal_lahir','$no_telp','$foto_guru')";

    $result = $conn->query($query) or die(mysqli_error($conn));

    if($result) {
        echo "<script>alert('Data Berhasil ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=guru';</script>";

    } else {
        echo "<script>alert('Data Gagal ditambahkan!'); 
        window.location.href='../halaman_admin.php?page=guru';</script>"; 

    }


?>
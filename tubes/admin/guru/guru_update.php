<?php

    require 'upload_foto.php';
    $nip_lama = htmlspecialchars($_POST['nip_lama']);
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama_guru']);
    $alamat = htmlspecialchars($_POST['alamat_guru']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $fotoLama = htmlspecialchars($_POST['fotoLama']);

    if($_FILES['foto_guru']['error'] === 4) {
		$foto_guru = $fotoLama;
	} else {
		$foto_guru = upload();
	}


    include "../../config/koneksi.php";

    $query = "UPDATE tbl_guru SET 
              nip='$nip',nama_guru ='$nama',alamat_guru='$alamat',jenis_kelamin='$jenis_kelamin',
              tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',
              no_telp='$no_telp',foto_guru='$foto_guru' 
              WHERE nip = '$nip_lama'";

    $result = $conn -> query($query)or die(mysqli_error($conn));

    if($result) {
        echo "<script>alert('Data berhasil diubah!'); 
        window.location.href='../halaman_admin.php?page=guru';</script>";
    }else {
        echo "<script>alert('Data gagal diubah!'); 
        window.location.href='../halaman_admin.php?page=guru';</script>";

    }

?>
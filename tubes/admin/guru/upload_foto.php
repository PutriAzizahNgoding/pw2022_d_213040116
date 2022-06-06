<?php
    function upload() {
    $namaFile = $_FILES['foto_guru']['name'];
	$ukuranFile = $_FILES['foto_guru']['size'];
	$error = $_FILES['foto_guru']['error'];
	$tmpName = $_FILES['foto_guru']['tmp_name'];

	if( $error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
				document.location.href = '../halaman_admin.php?page=guru';
		    </script>";
		    return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
				document.location.href = '../halaman_admin.php?page=guru';
		    </script>";
		    return false;
	}

	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
				document.location.href = '../halaman_admin.php?page=guru';
		    </script>";
		    return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../../assets/img/'.$namaFileBaru);

	return $namaFileBaru;

    } 

    ?>
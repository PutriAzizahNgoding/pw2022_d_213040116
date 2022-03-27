<?php  
// cek apakah tidak ada data di $_GET
// isset untuk mengecek apakah variabel sudah pernah dibuat atau belum
// if( isset($_GET["nama"])), kalo belum dibikin
// memaksa user untuk pindah dari hal 2 balik lagi ke hal 1
//  sehingga user tidak bisa merubah di url untuk ke hal 2
if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect, memindahkan user dari sebuah halaman ke halaman lain
    header("Location: latihan1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>
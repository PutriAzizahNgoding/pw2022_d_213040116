<?php  
// materi dari youtube WPU
// variabel scope / lingkup variabel
// ada variabel lokal dan global
// $x = 10;

// function tampilx() {
//     global $x; // pake global maka akan mencari variabel diluar
//     echo $x;
// }

// tampilx();


// supersglobal
// variabel global milik PHP
// merupakan array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// GET
$mahasiswa = [
    [
        "nama" => "Putri Azizah Qudsiyah",
        "nrp" => "213040116",
        "email" =>"putriazizahqudsiyah@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "pp2.png"
        
    ],
    [
        "nama" => "Syifa Putri", 
        "nrp" => "213030102", 
        "email" =>"syifa@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "pp2.png"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach($mahasiswa as $mhs) : ?> 
            <li>
               <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
               &nrp=<?= $mhs["nrp"];?> &email=<?=$mhs["email"];?>
               &jurusan=<?= $mhs["jurusan"];?>&gambar=<?=$mhs["gambar"];?>"><?=$mhs["nama"]; ?></a> 
            </li>
          
        </ul>
        <?php endforeach; ?>


</body>
</html>
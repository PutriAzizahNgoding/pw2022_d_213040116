<?php 
// pertemuan di kelas
// Array Associative
//Array yang key-nya beer-asosiasi / berpasangan  dengan string (=>)

$mahasiswa = [
    [
        "nama" => "Putri Azizah Qudsiyah",
        "npm" => "213040116",
        "email" =>"putriazizahqudsiyah@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Syifa Putri", 
        "npm" => "213030102", 
        "email" =>"syifa@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Meisya Lia", 
        "npm" => "213020113",
        "email" => "meisya@gmail.com", 
        "jurusan"=>"Tata Boga"
     
    ],
    [  
        "nama" => "Dina Windiani",
        "npm" => "213010187",
        "email" => "dina@gmail.com", 
        "jurusan" =>"Sastra Inggris"
    ]
    ];

    // var_dump($mahasiswa[0]["email"]);

    ?>
    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama :<?php echo $mhs["nama"];?></li>
            <li>NPM : <?php echo $mhs["npm"]; ?></li>
            <li>Email :<?php echo $mhs["email"]; ?></li>
            <li>Jurusan :<?php echo $mhs["jurusan"];?></li>
        </ul>
    <?php echo "<hr>"; ?>
     <?php } ?> 

  <?php   
  // materi dari youtube WPU
  // Array Associative
  // Definisinya sama seperti array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri

  $mahasiswa1 = [
      [
      "nama" => "Kelvin Putra",
      "nrp" => "213040123",
      "email" => "kelvin@unpas.ac.id",
      "jurusan" => "Teknik Informatika",
      "gambar" => "ava2.png"
      ],

      [
        "nama" => "Refa Ahmad",
        "nrp" => "213030143",
        "email" => "doddy@unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "ava3.png"
      ]
       
    ];


  ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach( $mahasiswa1 as $mhs1 ) : ?>
 	<ul>
        <li>
            <img src="img/<?= $mhs1["gambar"]; ?>" height="100">
        </li>
 		<li>Nama : <?= $mhs1["nama"]; ?></li>
 		<li>NRP : <?= $mhs1["nrp"]; ?></li>
 		<li>Jurusan :<?= $mhs1["jurusan"]; ?></li>
 		<li>Email : <?= $mhs1["email"]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>



                                                                            
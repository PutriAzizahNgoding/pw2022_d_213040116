<?php  

// ada beberapa hal yang harus diperhatikan saat membuat fungsi sendiri yaitu harus didefinisikan dulu
// sebuah function itu biasanya mengembalikan nilai

//<?php echo salam("Putri"); >? "Putri" sebagai argument
//<?php echo salam("Pagi","Putri"); >? pagi akan dikirim ke variabel wakktu dan Putri ke variabel nama

// function salam() {
//     return "Selamat Datang, admin";
// }

// function salam($nama) {
//     return "Selamat Datang, $nama!";
// }

// function salam($waktu, $nama) {
//     return "Selamat $waktu, $nama!";
// }

function salam($waktu = "Datang", $nama="Admin") { // menggunakan parameter default
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
</body>
</html>
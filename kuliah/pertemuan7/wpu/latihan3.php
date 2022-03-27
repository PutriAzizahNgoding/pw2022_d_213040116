<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ): // apakah tombol submit sudah dipencet atau belum ?> 
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif;?>

    <!-- <form action="latihan4.php" method="post"> -->
        <form action="" method="post">
        Masukkan nama :
        <input type="text" name="nama"> <!-- name ini akan menjadi key array associative $_POST nya  -->
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
    
</body>
</html>
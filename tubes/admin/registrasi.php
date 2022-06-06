<?php  
include "../config/koneksi.php";
require 'regist_valid.php';
if( isset($_POST["registrasi"]) ) {

	if(registrasi($_POST) > 0 ) {
        echo "<script>
        alert('User baru berhasil ditambahkan.Silahkan login!');
        document.location.href = 'login.php';
       </script>";
	} else {
		echo"<script>alert('User gagal ditambahkan!');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Form</title>
    <link rel="stylesheet" href="../assets/css/regist.css">
    <link rel="icon" href="../assets/img/admin2.png" type="image/ico" / >
</head>
<body>
    <div class="login-container">
        <div class="admin-icon">
            <img src="../assets/img/admin2.png" id="icon"/>
        </div>
        <h4>Silahkan Registrasi Terlebih Dahulu</h4>
    <div class="admin-login-form">
        <form name="registrasi" method="POST" action="" autocomplete="off">
            <div>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="password" name="password2" placeholder="Konfirmasi Password" required>
            </div>
            <div>
                 <input type="submit" name="registrasi" value="REGISTRASI">
            </div>
            <div>
                <a href="login.php" style="text-decoration:none">Sudah punya akun</a>
            </div>
        </form>

    </div>
    </div>
    
</body>
</html>
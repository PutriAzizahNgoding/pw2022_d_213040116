<?php  
session_start();
if(isset($_SESSION['salah'])) {
    echo '<script>alert("Username atau Password yang Anda masukkan salah")<script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="icon" href="../assets/img/admin2.png" type="image/ico" / >
</head>
<body>
    <div class="login-container">
        <div class="admin-icon">
            <img src="../assets/img/admin2.png" id="icon"/>
        </div>
        <h4>Silahkan Login Terlebih Dahulu</h4>    
    <div class="admin-login-form">
        <form name="login" method="POST" action="login_valid.php" autocomplete="off">
            <div>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" value="LOGIN">
            </div>
            <div>
                <a href="registrasi.php" style="text-decoration:none">Tambah Admin Baru</a>
            </div>
        </form>

    </div>
    </div>
    
</body>
</html>
<?php  
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="icon" href="../assets/img/siswa.png" type="image/ico" / >
</head>
<body>
    <div class="login-container">
        <div class="admin-icon">
            <img src="../assets/img/siswa.png" id="icon"/>
        </div>
        <h4>Silahkan Login Terlebih Dahulu</h4>    
    <div class="admin-login-form">
        <form name="login" method="POST" action="siswa_validasi.php" autocomplete="off">
            <div>
                <input type="text" name="nis" placeholder="NIS" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" value="LOGIN">
            </div>
        </form>

    </div>
    </div>
    
</body>
</html>
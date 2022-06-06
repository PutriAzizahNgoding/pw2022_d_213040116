<?php  
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include "../config/koneksi.php";

$query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

$result = $conn ->query($query);

if($row = $result -> fetch_row()) {
    $_SESSION['logged-in'] = true;
    $_SESSION['username'] = $username;
    header('Location: halaman_admin.php?page=dashboard');
} else {
    $_SESSION['salah'] = 'salah';
    header('Location: login.php');
}



?>
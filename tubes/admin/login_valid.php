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
    echo "<script>alert('Berhasil Login!'); window.location.href='halaman_admin.php?page=dashboard';</script>";
    // header('Location: halaman_admin.php?page=dashboard');
} else {
    echo "<script>alert('Gagal Login!'); window.location.href='login.php';</script>";
   
}



?>
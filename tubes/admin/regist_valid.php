 <?php  

function registrasi($data) {
include '../config/koneksi.php';    

$username = htmlspecialchars(strtolower( $data['username']));
$password = mysqli_real_escape_string($conn,$data['password']);
$password2 = mysqli_real_escape_string($conn,$data['password2']);

// jika username / password kosong
if(empty($username) || empty($password2) || empty($password2) ) {
  echo "<script>
        alert('username / password tidak boleh kosong!');
        document.location.href= 'registrasi.php'
        </script>";  

        return false;
}

    // jika username sudah ada
    $query = "SELECT * FROM tbl_user WHERE username='$username'";

    $result = $conn ->query($query);
    
    if($row = $result -> fetch_row()) {
        $_SESSION['logged-in'] = true;
        $_SESSION['username'] = $username;
        echo "<script>
             alert('Username sudah terdaftar!');
             document.location.href = 'registrasi.php';
            </script>";
        return false;    
    }

    // jika konfirmasi password tidak sesuai
    if($password !== $password2) {
        echo "<script>
        alert('Konfirmasi password tidak sesuai!');
        document.location.href = 'registrasi.php';
       </script>";
    }

    // jika password < 5 digit
    if(strlen($password) < 5 ) {
        echo "<script>
        alert('Password terlalu pendek!');
        document.location.href = 'registrasi.php';
       </script>";
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password, PASSWORD_DEFAULT);
    // Insert ke tabel user
    $query = "INSERT INTO tbl_user VALUES(null,'$username','$password_baru')
    ";
    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);


}

?>
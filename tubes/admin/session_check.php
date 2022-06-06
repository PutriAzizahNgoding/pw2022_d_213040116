<?php  
    if(!isset($_SESSION['logged-in'])) {
        header('Location: ../login.php');
    }

?> 
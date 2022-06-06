<?php
	session_start();	
	if(!isset($_SESSION['logged-in']))
	{		
		header('Location: login.php');
	}
		
?>

<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/halaman_admin.css">
		<link rel="stylesheet" href="../assets/css/tabel.css">
		<link rel="stylesheet" href="../assets/css/dashboard.css">		
		<link rel="stylesheet" href="../assets/css/modal.css">
		<script src="../assets/js/jquery.min.js" type="text/javascript"></script>		
        <link rel="icon" href="../assets/img/siswa.png" type="image/ico" / >
		<title>Halaman Siswa</title>						
	</head>
	<body>
        <div class="container">
            <div id="page-h" class="page-header">
                <div class="page-logo">
                    <img class="logo" src="../assets/img/logo.png"/ >
                </div>
                <h3 class="menu-heading">Dashboard</h3>
                <a href="?page=dashboard"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Dashboard</a>
            </div>
            <div class="page-content">
			<div class="content-header">
				<span><?php echo "Hallo,".$_SESSION['username']." | (Siswa)"?></span>
				<img src="../assets/img/siswa.png" class="icon" />
				<div class="admin-icon">
				<a class="link" href="logout.php">										
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Logout</span>					
				</a>
				</div>			
			</div>
            
            <div class="content">
                <?php  
                    if(isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch($page) {
                        case "dashboard";
                            include "dashboard.php";
                            break;
                        }
                    }
                
                ?>
            </div>
        </div>
        </div>

        <script type="text/javascript" src="../assets/js/delete_alert.js"></script>
        <script type="text/javascript" src="../assets/js/modal.js"></script>

    </body>
    </html>
    
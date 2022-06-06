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
        <link rel="icon" href="../assets/img/logo.png" type="image/ico" / >
		<title>Halaman Admin</title>						
	</head>
	<body>
        <div class="container">
            <div id="page-h" class="page-header">
                <div class="page-logo">
                    <img class="logo" src="../assets/img/logo.png"/ >
                </div>
                <h3 class="menu-heading">Dashboard</h3>
                
                <a href="?page=dashboard"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Dashboard</a>
                <hr>

                <h3 class="menu-heading">Guru</h3>
                <a href="?page=guru"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Daftar Guru</a>
                <a href="?page=jadwal_mengajar"><i class="fa fa-calendar-o fa-icon" aria-hidden="true"></i></i>Daftar Jadwal</a>
                <hr>

                <h3 class="menu-heading">Siswa</h3>
                <a href="?page=siswa"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Daftar Siswa</a>
                <hr>

                <h3 class="menu-heading">Mata Pelajaran</h3>
                <a href="?page=kelas"><i class="fa fa-building fa-icon" aria-hidden="true"></i>Daftar Kelas</a>	  	
                <a href="?page=mapel"><i class="fa fa-book fa-icon" aria-hidden="true"></i>Daftar Mata Pelajaran</a>	  	 
                <hr>
            </div>
            <div class="page-content">
			<div class="content-header">
				<span>Administrator</span>
				<img src="../assets/img/admin2.png" class="icon" />
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
                        case "guru";
                            include "guru/index.php";
                            break;
                        case "siswa";
                            include "siswa/index.php";
                            break;
                        case "mapel";
                            include "mapel/index.php";
                            break;
                        case "kelas";
                            include "kelas/index.php";
                            break;
                        case "jadwal_mengajar";
                            include "jadwal/index.php";
                            break;             
                            
                        }
                    }
                
                ?>
            </div>
        </div>
        </div>

        <script type="text/javascript" src="../assets/js/delete_alert.js"></script>
        <script type="text/javascript" src="../assets/js/modal.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>
    </html>
    
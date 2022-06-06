
<?php
	if(isset($_GET['status'])){
		echo '<script>alert("Data Gagal Ditambahkan!")</script>'; 
	}
	include "../config/koneksi.php";
	
	// Cek session
	if(!isset($_SESSION['logged-in'])){		
		include "../session_check.php";
	}


?>

<div class="tabel-page">
	<div class="tabel-heading">
		Data Siswa		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>
	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="siswa">
			<input type="text" name="keyword">
			<button class="button-input" id="myBtn" type="submit" name="cari">
			<i class="fa fa-search" aria-hidden="true"></i>Cari
			</button>
			<br><br>
		</form>				
	</div>
	<table id="list-data" class="display">	
		<thead>
			<tr>
                <th><h5>Foto Profil</h5></th>
				<th><h5>NIS</h5></th>
				<th><h5>Nama Siswa</h5></th>
				<th><h5>Jenis Kelamin</h5></th>
                <th><h5>Alamat</h5></th>
				<th><h5>Kelas</h5></th>
                <th><h5>Password</h5></th>
				<th><h5>Aksi</h5></th>			
			</tr>
		</thead>	
		<?php
		include "../config/koneksi.php";
		if(isset($_GET['cari'])) {
			$keyword = $_GET['keyword'];
			$query = "SELECT * FROM tbl_siswa as s INNER JOIN tbl_kelas as k ON k.id_kelas = s.id_kelas
						  WHERE 
						  nis LIKE '%$keyword%' OR
						  nama_siswa LIKE '%$keyword%' OR
						  jenis_kelamin LIKE '%$keyword%' OR
						  alamat LIKE '%$keyword' OR
						  nama_kelas LIKE '%$keyword%'";	 
				
			} else {
				// tabel siswa berelasi dengan tabel kelas
		$query = "SELECT * FROM tbl_siswa as s INNER JOIN tbl_kelas as k ON k.id_kelas = s.id_kelas";
			}
		$result = $conn -> query($query)or die(mysqli_error($conn));
			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {
		?>
		        <tr>
                    <td><img src="../assets/img/<?= $row["foto_siswa"]; ?>" width="50"</td>
		        	<td><?php echo $row["nis"];?></td>
		        	<td><?php echo $row["nama_siswa"];?></td>
		        	<td><?php echo $row["jenis_kelamin"];?></td>
		        	<td><?php echo $row["alamat"];?></td>	
                    <td><?php echo $row["nama_kelas"];?></td>	
                    <td><?php echo $row["password_siswa"];?></td>	        	
		        	<td>
		        		<button class="button-edit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>Ubah
						</button> |
                        <a href='javascript:hapusDataSws("<?php echo $row['id_siswa']?>","<?php echo $row['id_kelas']?>")'>
		        			<button class="button-delete">
								<i class="fa fa-trash" aria-hidden="true"></i>Hapus
							</button>
		        		</a>
		        	</td>		        	
		        </tr>

		        <!-- Modal Update Data -->
				<div id="myModal<?php echo $i?>" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					    <div class="modal-header">
					      <span class="close" id="close<?php echo $i?>">&times;</span>
					      <h2>Update Data Siswa</h2>
					      <hr>
					    </div>
					<div class="modal-body">
					    <form name="input" method="post" action="siswa/siswa_update.php" enctype="multipart/form-data" autocomplete="off">
                            <input type="hidden" name="fotoLamaSiswa" value="<?= $row['foto_siswa'];?>">
							<input type="hidden" name="nis_lama" value="<?= $row['nis'];?>">    						      	
                            <label for="nis">NIS</label>
                            <input type="text" id="nis" name="nis" value="<?= $row['nis']?>" maxlength="10" required>
                            <label for="nama">Nama Siswa</label>
                            <input type="text" id="nama" name="nama_siswa" value="<?= $row['nama_siswa']?>" required>
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" value="<?= $row["jenis_kelamin"];?>"  checked> Wanita 
                            <input type="radio" name="jenis_kelamin" value="<?= $row["jenis_kelamin"];?>" > Pria	<br>
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" value="<?= $row["alamat"];?>">
                            <!-- Data Kelas -->
                            <label for="kelas">Kelas <input list="kelas" name="kelas" type="text" value="<?php echo $row['id_kelas']?>">
								</label>
								<datalist id="kelas" >
									<!-- Select Data Kelas -->
									<?php					
									$sql_r = "SELECT * from tbl_kelas";
									$result_r = mysqli_query($conn, $sql_r);
									if (mysqli_num_rows($result_r) > 0) {				
								    	while($row_r = mysqli_fetch_assoc($result_r)) {		    	
									?>
										<option value="<?php echo $row_r['id_kelas']?>">
											<?php echo $row_r['nama_kelas']?>
										</option>
									<?php				
								    	}
									} 												
									?>			 
								</datalist>	
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="password" value="<?= $row["password_siswa"];?>"  required>
                            <label for="foto_siswa">Foto</label><br>
							<img src="../assets/img/<?= $row['foto_siswa'];?>" width="40" > <br>
							<input type="file" id="foto_siswa" name="foto_siswa"  ><br>
                            <input type="submit" value="Update">
							</form>
					    </div>    
					</div>
				</div>
			    
		<?php
				$i++;
		    	}
			} 
			else {
		    		echo "0 results";
			}

			mysqli_close($conn);
		?>
	</table>
</div>

<!-- mengambil data kelas -->
<?php
	include "../config/koneksi.php";
	$sql_kelas = "SELECT * from tbl_kelas"; 
	$kelas = mysqli_query($conn, $sql_kelas);

    ?>

<!-- Modal untuk input data baru -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Siswa</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="siswa/siswa_input.php" enctype="multipart/form-data" autocomplete="off">
		<label for="nis">NIS</label>
		<input type="text" id="nis" name="nis" placeholder="NIS" maxlength="10" required>
		<label for="nama">Nama Siswa</label>
		<input type="text" id="nama" name="nama_siswa" placeholder="Nama Siswa" required>
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
		<input type="radio" name="jenis_kelamin" value="wanita" checked> Wanita 
		<input type="radio" name="jenis_kelamin" value="pria"> Pria	<br>
		<label for="alamat">Alamat</label>
		<input type="text" id="alamat" name="alamat" placeholder="Alamat Siswa" required>
        <!-- Data Kelas -->
		<label for="kelas">Kelas: <input list="kelas" name="kelas" type="text" placeholder="Kelas">
		</label>
		<datalist id="kelas">
		<!-- Select Data Kelas -->
		<?php						
	    while($l_kelas = mysqli_fetch_assoc($kelas)) {		    	
		?>
			<option value="<?php echo $l_kelas['id_kelas']?>">
				<?php echo $l_kelas['nama_kelas']?>
			</option>
		<?php					    	
		} 						
		?>			 
		</datalist>	
		<label for="pass">Password</label>
		<input type="password" id="pass" name="password" placeholder="Password" required>
        <label for="foto_siswa">Foto</label><br>
		<input type="file" id="foto_siswa" name="foto_siswa" ><br>
		<input type="submit">
	</form>
    </div>    
  </div>
</div>
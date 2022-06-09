
<?php
	if(!isset($_GET['page'])){
		include "../session_check.php";
	}

?>

<!-- Tabel Data Jadwal Mengajar -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Jadwal Mengajar		
	</div>
	<div class="button-container">
	
	<button class="button-input" id="myBtn" onclick="show_modal(0)" >
	<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
	</button>

</div>
	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="jadwal_mengajar">
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
				<th><h5>Guru</h5></th>
				<th><h5>Mata Mata Pelajaran</h5></th>
				<th><h5>Hari</h5></th>
				<th><h5>Waktu</h5></th>
				<th><h5>Kelas</h5></th>				
				<th><h5>Aksi</h5></th>			
			</tr>
		</thead>

		<?php		
			include "../config/koneksi.php";
			if(isset($_GET['cari'])){
				$keyword = $_GET['keyword'];
			
			$sql = "SELECT * from tbl_guru as g
						INNER JOIN tbl_mengajar as me ON g.id_guru = me.id_guru
						INNER JOIN tbl_mapel as m ON m.id_mapel = me.id_mapel
						INNER JOIN tbl_jadwal as j ON j.id_mapel = me.id_mapel AND j.id_guru = g.id_guru
						INNER JOIN tbl_kelas as k ON k.id_kelas = j.id_kelas
						WHERE
						nama_guru LIKE '%$keyword%' OR
						nama_mapel LIKE '%$keyword%' OR
						hari LIKE '%$keyword%' OR
						nama_kelas LIKE '%$keyword%'";
			} else {
			$sql = "SELECT * from tbl_guru as g
						INNER JOIN tbl_mengajar as me ON g.id_guru = me.id_guru
						INNER JOIN tbl_mapel as m ON m.id_mapel = me.id_mapel
						INNER JOIN tbl_jadwal as j ON j.id_mapel = me.id_mapel AND j.id_guru = g.id_guru
						INNER JOIN tbl_kelas as k ON k.id_kelas = j.id_kelas	
						ORDER BY FIELD(j.Hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu','minggu')";										
			}
			$result = $conn -> query($sql)or die(mysqli_error($conn));
			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {	    	
		?>
				<!-- Menampilkan Data guru -->
		        <tr>
		        	<td><?php echo $row["nama_guru"];?></td>
		        	<td><?php echo $row["nama_mapel"];?></td>
		        	<td><?php echo $row["hari"];?></td>
		        	<td><?php echo $row["jam_masuk"]."-".$row["jam_keluar"];?></td>
		        	<td><?php echo $row["nama_kelas"];?></td>

		        	
		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Ubah
						</button>	|
						<a href='javascript:hapusDataJadwal("<?php echo $row['id_jadwal']?>", "<?php echo $row['id_guru']?>", "<?php echo $row['id_mapel']?>")'>		        			
		        			<button class="button-delete">
								<i class="fa fa-trash" aria-hidden="true"></i> Hapus
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
					    <h2>Update Jadwal Mengajar</h2>
					    <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="jadwal/jadwal_update.php">
					    	
						    <input type="hidden" name="id_lama" value="<?php echo $row['id_jadwal']?>">						      	
						  
							<label for="id">Nama Guru</label>
							<input type="text" id="fid" value="<?php echo $row['nama_guru']?>" required>
						
							<label for="nama">Nama Mata Pelajaran</label>
							<input type="text" id="nama" list="mapel" name="mapel" value="<?php echo $row['id_mapel']?>" required>
						
							<label for="fnama">Hari</label>
							<input type="text" id="fnama" list="hari" name="hari" value="<?php echo $row['hari']?>" required>
							<datalist id="hari">
								<option value="Senin"></option>
								<option value="Selasa"></option>
								<option value="Rabu"></option>
								<option value="Kamis"></option>
								<option value="Jumat"></option>
								<option value="Sabtu"></option>	       									
							</datalist>
								
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
							<!-- Jam -->
							<label for="fjam">Jam</label>
								<br>
								<input type="time" name="j_masuk" step="1" value="<?php echo $row['jam_masuk']?>"> - <input type="time" name="j_keluar" step="1" value="<?php echo $row['jam_keluar']?>">
								<input type="submit" value="Update">
							</form>
					    </div>    
					</div>
				</div>
			<?php							
				$i++;
		    	}
			} 			
			mysqli_close($conn);
		?>

	</table>
	</div>
	<div style="clear: both;"></div>


<!-- Get Data guru, Mapel, Kelas -->
<?php
	include "../config/koneksi.php";
	// guru
	$sql_guru = "SELECT * from tbl_guru"; 
	$guru = mysqli_query($conn, $sql_guru);
	// Mapel
	$sql_mapel = "SELECT * from tbl_mapel";
	$mapel = mysqli_query($conn, $sql_mapel);
	// kelas
	$sql_kelas = "SELECT * from tbl_kelas";
	$kelas = mysqli_query($conn, $sql_kelas);
?>

<!-- Modal Input Data -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Jadwal Mengajar</h2>
      <hr>
    </div>
    <div class="modal-body">
     <form name="input" method="post" action="jadwal/jadwal_input.php">
		<!-- Data Guru -->
      	<label for="fguru">Guru: <input list="guru" name="guru" type="text">
		</label>
		<datalist id="guru">
		<!-- Select Data guru -->
		<?php
		while($ambil_guru = mysqli_fetch_assoc($guru)) {		    	
		?>
			<option value="<?php echo $ambil_guru['id_guru']?>">
				<?php echo $ambil_guru['nama_guru']?>
			</option>
		<?php					    	
		} 						
		?>			 
		</datalist>	
		<!-- Data Mata Pelajaran -->
		<label for="fmapel">Mata Pelajaran: <input list="mapel" name="mapel" type="text">
		</label>
		<datalist id="mapel">
		<!-- Select Data Mata Pelajaran -->
		<?php			
		while($ambil_mapel = mysqli_fetch_assoc($mapel)) {
		?>
			<option value="<?php echo $ambil_mapel['id_mapel']?>">
				<?php echo $ambil_mapel['nama_mapel']?>
			</option>
		<?php					    	
		} 						
		?>			 
		</datalist>
		<!-- Data Kelas -->
		<label for="fkelas">Kelas: <input list="kelas" name="kelas" type="text">
		</label>
		<datalist id="kelas">
		<!-- Select Data Kelas -->
		<?php						
	    while($ambil_kelas = mysqli_fetch_assoc($kelas)) {		    	
		?>
			<option value="<?php echo $ambil_kelas['id_kelas']?>">
				<?php echo $ambil_kelas['nama_kelas']?>
			</option>
		<?php					    	
		} 						
		?>			 
		</datalist>		

		<!-- Data Hari -->
		<label for="fhari">Hari: <input list="hari" name="hari" type="text">
		</label>
		<datalist id="hari">			
			<option value="Senin"></option>
			<option value="Selasa"></option>
			<option value="Rabu"></option>
			<option value="Kamis"></option>
			<option value="Jumat"></option>
			<option value="Sabtu"></option>		
       				
		</datalist>
		<!-- Jam -->
		<label for="fjam">Jam</label>
		<br>
		<input type="time" name="j_masuk" step="1"> - <input type="time" name="j_keluar" step="1">
		<input type="submit" value="Tambah">
	</form>
    </div>    
  </div>
</div>
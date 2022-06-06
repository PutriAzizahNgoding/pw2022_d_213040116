<!-- Check Status tambah data -->
<?php
	if(!isset($_GET['page'])){
		include "../session_check.php";
	}

	if(isset($_GET['status'])){
		echo "<script>
		alert('Data Gagal ditambahkan!');
	</script>";
	}
?>

<!-- Tabel Data Guru -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Mata Pelajaran		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>

	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="mapel">
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
				<th><h5>Kode Mata Pelajaran</h5></th>
				<th><h5>Nama Mata Pelajaran</h5></th>
                <th><h5>Semester</h5></th>
				<th><h5>Aksi</h5></th>
						
			</tr>
		</thead>
	
		<?php
			include "../config/koneksi.php";

			if(isset($_GET['cari'])) {
				$keyword = $_GET['keyword'];
				$query = "SELECT * FROM tbl_mapel
							  WHERE 
							  kode_mapel LIKE '%$keyword%' OR
							  nama_mapel LIKE '%$keyword%' OR
							  nama_mapel LIKE '%$keyword%' ";
					
				} else {
				// $result = mysqli_query($conn, $query);
				$query = "SELECT * FROM tbl_mapel ";
				}
				$result = $conn -> query($query)or die(mysqli_error($conn));
	
				if (mysqli_num_rows($result) > 0) {
					$i = 1;
					while($row = mysqli_fetch_assoc($result)) {		    	
		?>
			
		        <tr>
		        	<td><?php echo $row["kode_mapel"];?></td>
		        	<td><?php echo $row["nama_mapel"];?></td>
                    <td><?php echo $row["semester"];?></td>

		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Ubah
						</button>	|
						<a href='javascript:hapusData("<?php echo $row['id_mapel']?>", 2)'>		        			
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
					      <h2>Update Data Mata Pelajaran</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="mapel/mapel_update.php" autocomplete="off" >
						      	<input type="hidden" name="kode_lama" value="<?= $row['kode_mapel'];?>">
								<label for="kode_mapel">Kode Mata Pelajaran</label>
								<input type="text" id="kode_mapel" name="kode_mapel" value="<?= $row['kode_mapel']; ?>" required>
								<label for="nama_mapel">Nama Mata Pelajaran</label>
								<input type="text" id="nama_mapel" name="nama_mapel" value="<?= $row['nama_mapel']; ?>">
								<label for="semester">semester</label>
								<input type="text" id="semester" name="semester" value="<?= $row['semester']; ?>">
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

<!-- Modal Input Data -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Mata Pelajaran</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="mapel/mapel_input.php" autocomplete="off">
	  	  
		<label for="kode_mapel">Kode Mata Pelajaran</label>
		<input type="text" id="kode_mapel" name="kode_mapel" required>
		<label for="nama_mapel">Nama Mata Pelajaran</label>
		<input type="text" id="nama_mapel" name="nama_mapel"  required>
		<label for="semester">Semester</label>
		<input type="text" id="semester" name="semester" >			
		<input type="submit">
	</form>
    </div>    
  </div>
</div>
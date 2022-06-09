
<?php
	if(!isset($_GET['page'])){
		include "../session_check.php";
	}


?>


<div class="tabel-page">
	<div class="tabel-heading">
		Data Kelas	
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>
    
	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="kelas">
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
				<th><h5>Kode Kelas</h5></th>
				<th><h5>Nama Kelas</h5></th>
				<th><h5>Aksi</h5></th>
						
			</tr>
		</thead>
	
		<?php
			include "../config/koneksi.php";

			if(isset($_GET['cari'])) {
				$keyword = $_GET['keyword'];
				$query = "SELECT * FROM tbl_kelas
							  WHERE 
							  kode_kelas LIKE '%$keyword%' OR
							  nama_kelas LIKE '%$keyword%' ";
					
				} else {
				// $result = mysqli_query($conn, $query);
				$query = "SELECT * FROM tbl_kelas ";
				}
				$result = $conn -> query($query)or die(mysqli_error($conn));
	
				if (mysqli_num_rows($result) > 0) {
					$i = 1;
					while($row = mysqli_fetch_assoc($result)) {		    	
		?>
			
		        <tr>
		        	<td><?php echo $row["kode_kelas"];?></td>
		        	<td><?php echo $row["nama_kelas"];?></td>

		        <td>		        		
		        <button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
					<i class="fa fa-pencil" aria-hidden="true"></i>
		        	Ubah
				</button> |
					<a href='javascript:hapusData("<?php echo $row['id_kelas']?>", 3)'>		        			
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
					      <h2>Update Data Kelas</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="kelas/kelas_update.php" autocomplete="off" >
						      	<input type="hidden" name="kode_lama" value="<?= $row['kode_kelas'];?>">
								<label for="kode_kelas">Kode Kelas</label>
								<input type="text" id="kode_kelas" name="kode_kelas" value="<?= $row['kode_kelas']; ?>" required>
								<label for="nama_kelas">Nama Kelas</label>
								<input type="text" id="nama_kelas" name="nama_kelas" value="<?= $row['nama_kelas']; ?>">
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
      <h2>Tambah Data Kelas</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="kelas/kelas_input.php" autocomplete="off">
	  	  
		<label for="kode_kelas">Kode Kelas</label>
		<input type="text" id="kode_kelas" name="kode_kelas"  required>
		<label for="nama_kelas">Nama Kelas</label>
		<input type="text" id="nama_kelas" name="nama_kelas"  required>			
		<input type="submit" value="Tambah">
	</form>
    </div>    
  </div>
</div>
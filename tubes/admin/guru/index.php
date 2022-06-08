
<?php

	if(!isset($_GET['page'])){
		include "../session_check.php";
	}


?>

<!-- Tabel Data Guru -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Guru		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>

	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="guru">
			<input type="text" name="keyword" >
			<button class="button-input" id="myBtn" type="submit" name="cari" >
			<i class="fa fa-search" aria-hidden="true"></i>Cari
			</button>
			<br><br>
		</form>		
		</div> 

	
	<table id="list-data" class="display">

		<thead>
			<tr>
				<th><h5>Foto Profil </h5></th>
				<th><h5>NIP</h5></th>
				<th><h5>Nama Guru</h5></th>
                <th><h5>Alamat</h5></th>
				<th><h5>Jenis Kelamin</h5></th>
				<th><h5>Tempat Lahir</h5></th>
				<th><h5>Tanggal Lahir</h5></th>
				<th><h5>No Telepon</h5></th>
				<th colspan="2"><h5>Aksi</h5></th>
						
			</tr>
			
		</thead>
	
		<?php
			include "../config/koneksi.php";
		
		
		//  $keyword = "''";
		 if(isset($_GET['cari'])) {
			$keyword = $_GET['keyword'];
			$query = "SELECT * FROM tbl_guru
						  WHERE 
						  nip LIKE '%$keyword%' OR
						  nama_guru LIKE '%$keyword%' OR
						  alamat_guru LIKE '%$keyword' OR
						  jenis_kelamin LIKE '%$keyword%' OR
						  tempat_lahir LIKE '%$keyword%' OR
						  tanggal_lahir LIKE '%$keyword%'";	 
				
			} else {
			// $result = mysqli_query($conn, $query);
			$query = "SELECT * FROM tbl_guru ";
			}
			$result = $conn -> query($query)or die(mysqli_error($conn));

			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {	
		?>
			
		        <tr>
					<td><img src="../assets/img/<?= $row["foto_guru"]; ?>" width="50"</td>
		        	<td><?php echo $row["nip"];?></td>
		        	<td><?php echo $row["nama_guru"];?></td>
                    <td><?php echo $row["alamat_guru"];?></td>
					<td><?php echo $row["jenis_kelamin"];?></td>
					<td><?php echo $row["tempat_lahir"];?></td>
					<td><?php echo $row["tanggal_lahir"];?></td>
					<td><?php echo $row["no_telp"];?></td>

                   
		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Ubah
						</button>
						|	
						<a href='javascript:hapusData("<?php echo $row['id_guru']?>", 1)'>		        			
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
					    <h2>Update Data Guru</h2>
					    <hr>
					 </div>
					 <div class="modal-body">
					    <form name="input" method="post" action="guru/guru_update.php" enctype="multipart/form-data" autocomplete="off" >
							<input type="hidden" name="fotoLama" value="<?= $row['foto_guru'];?>">
						    <input type="hidden" name="nip_lama" value="<?= $row['nip'];?>">
							<label for="nip">NIP</label>
							<input type="text" id="nip" name="nip" value="<?= $row['nip']; ?>" required>
							<label for="nama">Nama Guru</label>
							<input type="text" id="nama" name="nama_guru" value="<?= $row['nama_guru']; ?>">
							<label for="alamat">Alamat</label>
							<input type="text" id="alamat" name="alamat_guru" value="<?= $row['alamat_guru']; ?>">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<input type="radio" name="jenis_kelamin" value="<?= $row["jenis_kelamin"];?>" checked> Wanita 
							<input type="radio" name="jenis_kelamin" value="<?= $row["jenis_kelamin"]; ?>"> Pria <br>
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" id="tempat_lahir" name="tempat_lahir" value="<?=$row['tempat_lahir']; ?>">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>"><br>
							<label for="no_telp">No Telephone</label><br>
							<input type="text" id="no_telp" name="no_telp" value="<?= $row['no_telp']; ?>"> <br>
							<label for="foto_guru">Foto</label> <br>
							<img src="../assets/img/<?= $row['foto_guru'];?>" width="40" > <br>
							<input type="file" id="foto_guru" name="foto_guru"> <br>
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
	



<!-- Modal Input Data -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Guru</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="guru/guru_input.php" enctype="multipart/form-data" autocomplete="off">
	  	  
		<label for="nip">NIP</label>
		<input type="text" id="nip" name="nip" required>
		<label for="nama">Nama Guru</label>
		<input type="text" id="nama" name="nama_guru"  required>
		<label for="alamat">Alamat</label>
		<input type="text" id="alamat" name="alamat" >
		<label for="jenis_kelamin">Jenis Kelamin</label><br>
		<input type="radio" name="jenis_kelamin" value="wanita" checked> Wanita 
		<input type="radio" name="jenis_kelamin" value="pria"> Pria	<br>
		<label for="tempat_lahir">Tempat Lahir</label>
		<input type="text" id="tempat_lahir" name="tempat_lahir" >
		<label for="tanggal_lahir">Tanggal Lahir</label><br>
		<input type="date" id="tanggal_lahir" name="tanggal_lahir" ><br>
		<label for="no_telp">No Telephone</label>
		<input type="text" id="no_telp" name="no_telp" >
		<label for="foto_guru">Foto</label><br>
		<input type="file" id="foto_guru" name="foto_guru" ><br>			
		<input type="submit">
	</form>
    </div>    
  </div>
</div>

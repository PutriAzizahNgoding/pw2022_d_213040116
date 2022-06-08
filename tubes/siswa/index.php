<?php

	// Cek session
	if(!isset($_SESSION['logged-in'])){		
		include "../session_check.php";
	}



?>

<div class="tabel-page">
	<div class="tabel-heading">
		Detail Siswa		
	</div>
	<table id="list-data" class="display">	
		<thead>
		<?php
				include "../config/koneksi.php";

				$query = "SELECT * FROM tbl_siswa as s INNER JOIN tbl_kelas as k ON k.id_kelas = s.id_kelas WHERE s.password_siswa";
				$result = mysqli_query($conn, $query);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
					    	
		?>
			<tr>
                <th><h5>Foto Profil</h5></th>
				<th><h5>NIS</h5></th>
				<th><h5>Nama Siswa</h5></th>
				<th><h5>Jenis Kelamin</h5></th>
                <th><h5>Alamat</h5></th>
				<th><h5>Kelas</h5></th>		
			</tr>
		</thead>	
	
		        <tr>
                    <td><img src="../assets/img/<?= $row["foto_siswa"]; ?>" width="50"</td>
		        	<td><?php echo $row["nis"];?></td>
		        	<td><?php echo $row["nama_siswa"];?></td>
		        	<td><?php echo $row["jenis_kelamin"];?></td>
		        	<td><?php echo $row["alamat"];?></td>	
                    <td><?php echo $row["nama_kelas"];?></td>		        			        	
		        </tr>

			    
		<?php
				
					}
				}
			
			mysqli_close($conn);
		?>
	</table>
</div>



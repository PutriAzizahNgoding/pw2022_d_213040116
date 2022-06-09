<?php 

include "../config/koneksi.php";

// untuk mengecek hari
$list_hari = array("ahad","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$ambil_hari = date ('w'); // mengambil list hari dari index 0

$hari = "'".$list_hari[$ambil_hari]."'";


?>


<div class="tabel-page">
	<div class="tabel-heading">
		Jadwal Kelas Hari ini
	</div>	
	<div class="search-box">		
		<form method="GET" action="" autocomplete="off">
		<input type="hidden" name="page" value="dashboard">
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
				<th><h5>Nama Guru</h5></th>
				<th><h5>Mata Pelajaran</h5></th>
				<th><h5>Kelas</h5></th>
				<th><h5>Hari</h5></th>
				<th><h5>Waktu</h5></th>						
			</tr>
		</thead>

		<?php
		if(isset($_GET['cari'])) {
			$keyword = $_GET['keyword'];
			$sql ="SELECT * from tbl_guru as g
					INNER JOIN tbl_mengajar as me ON  g.id_guru = me.id_guru
					INNER JOIN tbl_mapel as m ON m.id_mapel = me.id_mapel
					INNER JOIN tbl_jadwal as j ON j.id_mapel = me.id_mapel AND j.id_guru = g.id_guru
					INNER JOIN tbl_kelas as k ON k.id_kelas = j.id_kelas
					WHERE 
					nama_guru LIKE '%$keyword%' OR
					nama_mapel LIKE '%$keyword%' OR
					nama_kelas LIKE '%$keyword%' OR
					hari LIKE '%$keyword%'";
 			} else {	
			// pengambilan data jadwal terkini
			$sql ="SELECT * from tbl_guru as g
			INNER JOIN tbl_mengajar as me ON  g.id_guru = me.id_guru
			INNER JOIN tbl_mapel as m ON m.id_mapel = me.id_mapel
			INNER JOIN tbl_jadwal as j ON j.id_mapel = me.id_mapel AND j.id_guru = g.id_guru
			INNER JOIN tbl_kelas as k ON k.id_kelas = j.id_kelas
			ORDER BY k.nama_kelas";
			 }
			 $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>
		
		        <tr>
		        	<td><?php echo $row["nama_guru"];?></td>
		        	<td><?php echo $row["nama_mapel"];?></td>		        		        
		        	<td><?php echo $row["nama_kelas"];?></td>
					<td><?php echo $row["hari"];?></td>
		        	<td><?php echo $row["jam_masuk"]."-".$row["jam_keluar"];?></td>
		        </tr>
		<?php							
		    	}
			} 			
			mysqli_close($conn);
		?>

	</table>
</div>

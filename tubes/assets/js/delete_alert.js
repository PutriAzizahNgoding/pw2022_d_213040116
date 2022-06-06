// Untuk komfirmasi delete data
function hapusData(id, identifier){
	console.log(id);
    if (confirm("Apakah anda yakin akan menghapus data ini?")){
    	switch(identifier) {
		  case 1:
		    window.location.href = 'guru/guru_delete.php?id=' + id;
		    break;
		  case 2:
		    window.location.href = 'mapel/mapel_delete.php?id=' + id;
		    break;
		  case 3:
		    window.location.href = 'kelas/kelas_delete.php?id=' + id;
		    break;						  		 
		}	          
    }
}


function hapusDataJadwal(id_jadwal, id_guru, id_mapel){    
    if (confirm("Apakah anda yakin akan menghapus data ini?")){
      window.location.href = 'jadwal/jadwal_delete.php?id=' +id_jadwal+'&guru='+id_guru+'&mapel='+id_mapel;
    }
	}

function hapusDataSws(id_siswa,id_kelas){
    if (confirm("Apakah anda yakin akan menghapus data ini?")){
      window.location.href = 'siswa/siswa_delete.php?id=' + id_siswa+'&kelas='+id_kelas;
    }
}


	
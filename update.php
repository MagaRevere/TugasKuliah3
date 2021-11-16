<?php
	include "dua.php";
	$name = $_REQUEST['nama'];
	$alm = $_REQUEST['alamat'];
	$telp = $_REQUEST['telp'];
	$id = $_REQUEST['ID'];
	
	//KONDISI 
	if (!empty($name) && !empty($alm) && !empty($telp) && !empty($id)) { 
		$sqli = ("UPDATE input_tabel SET nm='$name',addr='$alm',tlp='$telp' WHERE id='$id'"); 
		$result = mysqli_query($conn, $sqli);	
		
		if ($result) {
			echo "Data berhasil di update";
		} else {
			echo "Data gagal di update";
		}	
	} else {
		if (empty($name)) { 
			echo "Nama harus di isi"; 
		} 
		
		if (empty($alm)) { 
			echo "Alamat harus di isi"; 
		} 
		
		if (empty($telp)) { 
			echo "Telpon harus di isi"; 
		}
		
		if (empty($id)) { 
			echo "Data tidak di temukan"; 
		}
	}
	
	mysqli_close($conn);	
?>


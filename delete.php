<?php
	include "dua.php";
	$id = $_REQUEST['ID']; 
	
	if (!empty($id)) {
		$sqli = ("DELETE FROM input_tabel WHERE id='$id'");
		$result = mysqli_query($conn, $sqli); 
		
		if ($result) {
			echo "Data berhasil di hapus";
		} else {
			echo "Data gagal di hapus";
		}
	} else {
		if (empty($id)) { 
			echo "Data tidak di temukan"; 
		}
	}
	
	mysqli_close($conn);
?>
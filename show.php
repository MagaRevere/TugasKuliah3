<?php
	include "dua.php";
	$sqli 	= ("SELECT * FROM input_tabel");
	$result	= mysqli_query($conn, $sqli); 
	$no = 1;
	
	while ($show = mysqli_fetch_array($result)) {
		$a = $show['nm']; 
		$b = $show['addr']; 
		$c = $show['tlp']; 
		$n = $no++; 
		
		echo "$n. $a - $b - $c";
		echo '| <a href="edit.php?ID='.$show['id'].'">EDIT</a> | <a href="delete.php?ID='.$show['id'].'">DELETE</a><br />';
	}
	
	mysqli_close($conn);
?>
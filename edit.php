<?php
	include "dua.php";
	$id = $_REQUEST['ID']; 
	$sqli = ("SELECT * FROM input_tabel WHERE id='$id'"); 
	$result = mysqli_query($conn, $sqli); 
	$show = mysqli_fetch_array($result);
	mysqli_close($conn);
?>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form method="post" action="update.php">
		<input type="hidden" name='ID' value="<?php echo $show['id']; ?>" /><br /> 
		Nama : <input type="text" name="nama" value="<?php echo $show['nm']; ?>" /><br /> 
		Alamat : <input type="text" name="alamat" value="<?php echo $show['addr']; ?>" /><br /> 
		Telpon : <input type="text" name="telp" value="<?php echo $show['tlp']; ?>" /><br /> 
		<input type="submit" value="Update" /> 
	</form> 
</body> 
</html>
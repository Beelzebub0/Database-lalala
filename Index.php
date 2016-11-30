<?php

	include("connect.php");
	
	if(isset($_POST['submit']))
	{
		$identitas = $_POST['id'];
		$namanya = $_POST['nama'];
		$emailnya = $_POST['email'];
		$alamatnya = $_POST['alamat'];
	
	}
	
?>


<!doctype html>

<html>

	<head>
	
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/style.css" />
	</head>
	
	<body>
	
		<div id="wrapper">
		
			<div id="formDiv">
				<form method="POST" action="index.php" enctype="multipart/form-data">
					
					<label>Id:</label><br/>
					<input type="text" name="id" /><br/><br/>
					
					<label>Nama:</label><br/>
					<input type="text" name="nama" /><br/><br/>
					
					<label>Email:</label><br/>
					<input type="text" name="email" /><br/><br/>
					
					<label>Alamat:</label><br/>
					<input type="text" name="alamat" /><br/><br/>
					
					<input type="submit" name="submit" /><br/><br/>
					
				</form>
				
			</div>
		
		</div>
	
	</body>

</html>

<?php

	$con = mysqli_connect("localhost","root","","tutorial_database");
	
	if (mysqli_connect_errno())
	{
		echo "Error ocured hile connecting with database ".mysqli_connect_errno();
	
	}

?>

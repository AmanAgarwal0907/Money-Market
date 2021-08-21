<?php

	$conn = mysqli_connect('localhost','id17445185_root','Aman12345@$#','id17445185_customers');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
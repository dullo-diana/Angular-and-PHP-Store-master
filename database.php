<?php

	$host = "localhost";
	$username = "root";
	$password = null;
	$db = "angular";

	
	// Create connection
	$dbh = new PDO("mysql:host=$host;dbname=$db", $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
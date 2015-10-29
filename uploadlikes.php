<?php
	require('database.php');

	$id = json_decode($_POST['id']);
	$likes = json_decode($_POST['likes']);


	$sql = "UPDATE books SET likes=? WHERE id = ?";
	$query = $dbh->prepare($sql);
	$query->execute(array($likes,$id));	
?>
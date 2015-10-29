<?php
	require('database.php');

	$id = json_decode($_POST['id']);
	$dislikes = json_decode($_POST['dislikes']);


	$sql = "UPDATE books SET dislikes=? WHERE id = ?";
	$query = $dbh->prepare($sql);
	$query->execute(array($dislikes,$id));	
?>
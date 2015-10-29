<?php
	require('database.php');

	$stmt = $dbh->query("SELECT * FROM books");
	$books = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh=null;

	echo json_encode($books)
?>


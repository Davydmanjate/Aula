<?php
	include_once("../db.php");
	
	$id = $_GET['id'];

	$query = mysqli_query($conectar, "DELETE FROM produtos WHERE id = '$id'");
	
	/* PDO
		$stmt =$pdo->prepare("delete from produtos where id=" . $_GET['id']);
		$stmt->execute();
		
		ou
		$stmt = $pdo->prepare("DELETE FROM produtos WHERE id=?");
		$stmt->execute([$id]);
	*/
	
	header("location: deleteMsg.php");
?>
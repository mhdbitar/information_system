<?php
	$connection = mysqli_connect("localhost", "root", "", "information_system");
	$id = $_GET['id'];

	$sql = "DELETE FROM lectures WHERE id = '$id'";
	$result = mysqli_query($connection, $sql);

	header('location: admin.php');
?>
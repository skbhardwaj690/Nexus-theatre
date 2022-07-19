<?php
	include('db.php');
	$id=$_REQUEST['id'];
	$query = "DELETE FROM tb_theater WHERE id=$id"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error($con));
	header("Location: delete-theater.php");
?>
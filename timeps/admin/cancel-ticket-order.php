<?php
	include('db.php');
	$id=$_REQUEST['id'];
	$query = "DELETE FROM tb_ticket WHERE id=$id"; 
	$result = mysqli_query($con,$query) or die ( mysqli_error($con));
	header("Location: admin.php");
?>
<?php
	session_start();
	session_destroy();
	header("location:/timeps/index.php");
	session_destroy();
?>

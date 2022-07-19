<?php
	include	('db.php');

	$status = "";
	if(isset($_POST['new']) && $_POST['new']==1)
	{
		$nm=$_REQUEST['name'];
		$add =$_REQUEST['address'];
		$st =$_REQUEST['state'];
		$ct =$_REQUEST['city'];
		$pin =$_REQUEST['pin'];
    
		$con = new mysqli("localhost", "root", "","tp");
		$query = "INSERT INTO tb_theater(name,address,state,city,pin) VALUES ('$nm','$add','$st','$ct','$pin')";
		if(!mysqli_query($con, $query))
		{
			die('Error:' .mysqli_error($con));
		}

		$status = "New Record Inserted Successfully.";
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Theater Record</title>
    <link rel="shortcut icon" type="..\admin" href="nexus.png">	
    <link rel="stylesheet" href="css/style.css" />
</head>

<div style="height:13%;width:100%;background-color:black;margin-top:1px;float:left;position: fixed;top:0px;right:0px">
	<img src="../admin/nexus.png" height="80px" width="80px" style="margin-bottom:10px;margin-left: 10px">
	<font color="white" size="6%" style="margin-top: 30px;float: right;margin-right:30px">Admin Panel</font>
</div>
<div style="height:45px;width:100%;background-color:black;position: fixed;margin-top:75px;float:left;top:0px;right:0px;">
	<div class="dropdown" style="float: left;">
		<a class="dropbtn" href="admin.php" style="margin-top: 1px;">Dashboard</a>
			
	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Insert Record</button>
		<div class="dropdown-content">
   			<a href="insert-movie.php">Movies</a>
   			<a href="insert-theater.php">Theaters</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Edit Record</button>
		<div class="dropdown-content">
   			<a href="edit-movie.php">Movies</a>
   			<a href="edit-theater.php">Theaters</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Delete Record</button>
		<div class="dropdown-content">
   			<a href="delete-movie.php">Movies</a>
   			<a href="delete-theater.php">Theaters</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">View Record</button>
		<div class="dropdown-content">
   			<a href="view-movie.php">Movies</a>
   			<a href="view-theater.php">Theaters</a>
		</div>
	</div>

  <div class="dropdown" style="float: right;">
    <a class="dropbtn" href="logout.php" style="margin-top: 1px;">Logout</a>
  </div>

</div>
<body>
	<h1 style="margin-top: 300px;margin-left: 120px;">Insert New Record Of Theater</h1>


	<div style="float: left;margin-top: -370px;margin-left: 700px;">
			<div class="form">
				<div>
					<form name="form" method="post" enctype="multipart/form-data"> 
							<input type="hidden" name="new" value="1" />
							<p style="color:#FF0000;"><?php echo $status; ?></p>
							<p><input type="text" name="name" placeholder="Theater-name" required /></p>
							<p><input type="text" name="address" placeholder="Address" required /></p>
							<p><input type="text" name="state" placeholder="State" required /></p>
							<p><input type="text" name="city" placeholder="City" required /></p>
							<p><input type="text" name="pin" placeholder="Pin-code" required /></p>
												
							<p><input name="submit" type="submit" value="Submit" /></p>
						</form>
					<br /><br /><br /><br />
				</div>
			</div>
	</div>
</body>
</html>
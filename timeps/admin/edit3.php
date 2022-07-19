<?php
	include('db.php');
	$id=$_REQUEST['id'];
	$query = "SELECT * from tb_theater where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error($con));
	$row = mysqli_fetch_assoc($result);
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Record</title>
	    <link rel="shortcut icon" type="..\admin" href="nexus.png">	
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<div class="form" style="margin-left: 600px;margin-top: -5px;">
			<h1>Edit Record</h1>
			<?php
				$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
					$id=$_REQUEST['id'];
					$nm =$_REQUEST['name'];
					$add =$_REQUEST['address'];
					$st =$_REQUEST['state'];
					$ct =$_REQUEST['city'];
					$pin =$_REQUEST['pin'];

					$con = new mysqli("localhost", "root", "","tp");
					$update="update tb_theater set name='".$nm."', address='".$add."', state='".$st."', city='".$ct."', pin='".$pin."' where id='".$id."'";
					mysqli_query($con, $update) or die(mysqli_error());
					header("Location: edit-theater.php");
				}
				else 
				{
			?>
			<div>
				<form name="form" method="post" action="" enctype="multipart/form-data"> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
					<p><input type="text" name="name" placeholder="Theater-name" required value="<?php echo $row['name'];?>"/></p>
				
					<p><input type="text" name="address" placeholder="Address" required value="<?php echo $row['address'];?>"/></p>
					
					<p><input type="text" name="state" placeholder="State" required value="<?php echo $row['state'];?>"/></p>

					<p><input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>"/></p>
					
					<p><input type="text" name="pin" placeholder="Pin-code" required value="<?php echo $row['pin'];?>"/></p>

					<p><input name="submit" type="submit" value="Update" /></p>
				</form>
			<?php 
				} 
			?>

				<br /><br /><br /><br />
			</div>
		</div>
	</body>
</html>

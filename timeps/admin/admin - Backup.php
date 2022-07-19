<html>
<head>
    <title>Admin Side</title>
    <link rel="shortcut icon" type="..\admin" href="nexus.png">	
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div style="height:13%;width:100%;background-color:black;margin-top:1px;float:left;position: fixed;top:0px;right:0px">
	<img src="../admin/nexus.png" height="80px" width="80px" style="margin-bottom:10px;margin-left: 10px">
	<font color="white" size="6%" style="margin-top: 30px;float: right;margin-right:30px">Admin Panel</font>
</div>

<div style="height:45px;width:100%;background-color:black;position: fixed;margin-top:75px;float:left;top:0px;right:0px;">
	<div class="dropdown" style="float: left;">
		<a class="dropbtn" href="admin - Backup.php" style="margin-top: 1px;">Dashboard</a>
			
	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Insert Record</button>
		<div class="dropdown-content">
   			<a href="insert-movie.php">Mobile</a>
   			<a href="insert-theater.php">Tablets</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Edit Record</button>
		<div class="dropdown-content">
   			<a href="edit-movie.php">Mobile</a>
   			<a href="edit-theater.php">Tablets</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">Delete Record</button>
		<div class="dropdown-content">
   			<a href="delete-movie.php">Mobile</a>
   			<a href="delete-theater.php">Tablets</a>
  		</div>
  	</div>
	
	<div class="dropdown" style="float: left;">
		<button class="dropbtn">View Record</button>
		<div class="dropdown-content">
   			<a href="view-movie.php">Mobile</a>
   			<a href="view-theater.php">Tablets</a>
		</div>
	</div>

  <div class="dropdown" style="float: right;">
    <a class="dropbtn" href="logout.php" style="margin-top: 1px;">Logout</a>
  </div>
</div>
<!--<div style="float: right;margin-top: 300px;margin-right: 550px;"><img src="../admin/welcome.jpg">-->

<?php
	include('db.php');
?>
		<div class="form">
			<h2>Ordered Tickets</h2>
			
			<table width="100%" border="1" style="border-collapse:collapse;">
				<thead>
					<tr>
						<th><strong>S.No</strong></th>
						<th><strong>Name</strong></th>
						<th><strong>Email</strong></th>
						<th><strong>Phone no.</strong></th>
						<th><strong>Tickets</strong></th>
						<th><strong>Movie name</strong></th>
						<th><strong>Created on</strong></th>
						<th><strong>Show date</strong></th>
						<th><strong>Delete</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=1;
						$sel_query="Select * from tb_ticket ORDER BY id;";
						$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) 
							{ 
					?>
						<tr>
							<td align="center"><?php echo $count; ?></td>
							<td align="center"><?php echo $row["uname"]; ?></td>
							<td align="center"><?php echo $row["email"]; ?></td>
							<td align="center"><?php echo $row["phone"]; ?></td>
							<td align="center"><?php echo $row["qty"];?></td>
							<td align="center"><?php echo $row["movie_name"]; ?></td>
							<td align="center"><?php echo $row["created on"]; ?></td>
							<td align="center"><?php echo $row["show_date"]; ?></td>
							<td align="center"><a href="cancel-ticket-order.php?id=<?php echo $row["id"]; ?>"><img src="../upload/delete.png" width="25px" height="25px"></a></td>
						</tr>
						<?php 
							$count++; 
							} 
						?>
				</tbody>
			</table>
			
			<br/><br/><br/><br/>
		</div>

		<div>
			<h2>Review/Messages from Customers</h2>
			
			<table width="50%" border="1" bordercolor="gray" style="border-collapse:collapse;">
				<thead>
									<tr><th><strong>Sr No.</strong></th><th><strong>Name</strong></th><th><strong>Email Id</strong></th><th><strong>Message</strong></th>

				</thead>

				<tbody>
					<?php
						$count=1;
						$sel_query="Select * from review";
						$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) 
							{ 
					?>
					<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["email"]; ?></td></td><td align="center"><?php echo $row["message"]; ?></td></tr>
						<?php
							$count++; 
							}
						?>
				</tbody>

			</table>
			
			<br /><br /><br /><br />
		</div>
</body>
</html>
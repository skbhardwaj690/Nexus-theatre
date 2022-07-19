<html>
<head>
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
</body>
</html>

<?php
	include('db.php');
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Movie Records</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<div class="form">
			<h2>Movie Records</h2>
			
			<table width="100%" border="1" style="border-collapse:collapse;">
				<thead>
					<tr>
						<th><strong>S.No</strong></th>
						<th><strong>Movie-name</strong></th>
						<th><strong>Language</strong></th>
						<th><strong>Cast</strong></th>
						<th><strong>Description</strong></th>
						<th><strong>Release-year</strong></th>
						<th><strong>Video-URL</strong></th>
						<th><strong>Ticket-price</strong></th>
						<th><strong>Screen-day</strong></th>
						<th><strong>Screen-time</strong></th>
						<th><strong>Image</strong></th>
						<th><strong>Edit</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=1;
						$sel_query="Select * from tb_movie ORDER BY id;";
						$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) 
							{ 
					?>
						<tr>
							<td align="center"><?php echo $count; ?></td>
							<td align="center"><?php echo $row["movie_name"]; ?></td>
							<td align="center"><?php echo $row["lang"]; ?></td>
							<td align="center"><?php echo $row["cast"]; ?></td>
							<td align="center"><?php echo $row["descr"]; ?></td>
							<td align="center"><?php echo $row["release_year"]; ?></td>
							<td align="center"><?php echo $row["video_url"]; ?></td>
							<td align="center"><?php echo $row["t_price"]; ?></td>
							<td align="center"><?php echo $row["screen_day"]; ?></td>
							<td align="center"><?php echo $row["screen_time"]; ?></td>
							<td align="center"><img src="../upload/<?= $row["image"]; ?>" width="50px" height="50px"></td>
							<td align="center"><a href="edit2.php?id=<?php echo $row["id"]; ?>"><img src="../upload/edit.png" width="25px" height="25px"></a></td>
						</tr>
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

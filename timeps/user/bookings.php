<!DOCTYPE html>
<html>
<head>
    <title>NEXUS theater</title>
    <link rel="shortcut icon" type="..\user" href="nexus.png">
    <link rel="stylesheet" href="css/style.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<?php
session_start();
$um=$_SESSION['uname'];
if(isset($_SESSION['uname']))
{

?>

<body>
    <script>
        function myFunction() 
        {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") 
            {
                 x.className += " responsive";
            } 
            else 
            {
                x.className = "topnav";
            }
        }
    </script>

<!--Top Navbar-->

<div style="height:46px;width:100%;background-color:black;margin-top:1px;float:left;position: fixed;top:0px;right:0px">
    
        <ul>
            <li style="float: left;padding: 0px 3px">
                <img src="nexus.png" height="100px" style="margin-bottom:5px;margin-left: 10px;"> 
            </li>
            <li>
                <h1 align="center" style="color: white;margin-top:36px;">NEXUS theater</h1>
            </li>
        </ul>

	<ul>
        <li style="float: left;padding: 0px 3px">
            <form action="search.php" method="post">
                <button type="submit" name="submit"><img src="..\user\uimg\ser.jpg" style="height: 16px;margin-left: -7px; width:20px; margin-top: 5px;"></button>
                <input type="text" name="search" placeholder="Search..." style="height: 35px; width:213px; margin-top: 1px; margin-bottom: 3px;">
            </form>
        </li>
        <div class="topnav" id="myTopnav">
            <li style="float: right;"><a href="..\user\userhome.php" class="active">Home</a></li>
            <li style="float: right;"><a href="..\user\user.php"><?php echo $um ?></a></li>
            <li style="float: right;"><a href="..\user\contact.php">Contact</a></li>
            <li style="float: right;"><a href="..\user\movies.php">Movies</a></li>
            <li style="float: right;"><a href="..\user\bookings.php">Bookings</a></li>
            <li style="float: right;"><a href="about.php">About us</a></li>
            <li style="float: right;"><a href="logout.php">Logout</a></li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
        </div> 
	</ul>
</div>

<?php
include('db.php');
$con = new mysqli("localhost", "root", "","tp");

?>
<html>
	<div class="form">
			<u><h1 style="text-decoration: none;color: black;margin-top:200px; margin-left: 10px">My Bookings :- </h1></u>
			
			<table width="100%" border="1" style="border-collapse:collapse; ">
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
            <th><strong>Show time</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=1;
						$query="SELECT * FROM tb_ticket WHERE uname='".$um."'";
 						$sql=mysqli_query($con,$query);
							while($row = mysqli_fetch_assoc($sql)) 
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
              <td align="center"><?php echo $row["show_time"]; ?></td>
						</tr>
						<?php 
							$count++; 
							} 
						?>
				</tbody>
			</table>
			
			<br/><br/><br/><br/>
		</div>
</html>

</body>
<?php
}
else
{
   echo "<script type = \"text/javascript\">
alert(\"You have to login first....... !\");
window.location = (\"/timeps/index.php\")
</script>";
}
?>
</html>


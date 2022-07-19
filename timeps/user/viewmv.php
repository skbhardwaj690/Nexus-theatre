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

if(isset($_SESSION['uname']))
{
  $um=$_SESSION['uname'];
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
}
else
{
  //header("location:../index.php");
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
            <li style="float: right;"><a href="/timeps/index.php" class="active">Home</a></li>
            <li style="float: right;"><a href="/timeps/login.php">Login</a></li>
            <li style="float: right;"><a href="..\user\contact.php">Contact</a></li>
            <li style="float: right;"><a href="..\user\movies.php">Movies</a></li>
            <li style="float: right;"><a href="..\user\bookings.php">Bookings</a></li>
            <li style="float: right;"><a href="about.php">About us</a></li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
        </div> 
  </ul>
</div>
<?php
}
?>



<div style="height:100%px; width:100%; border:2px solid black; margin-top:2px">
	<?php
		include('db.php');
		$id=$_REQUEST['id'];
		$query="SELECT * FROM tb_movie WHERE id='".$id."'";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_assoc($result))
		{	
	?>

	<html>
	<body align="center" style="margin-top: 150px;">
	<table  height="10" align="left" style="margin-left: 20px;margin-top: 100px;margin-bottom: 30px;">
		<tr width="500">
		<td rowspan="9"><a href="<?php echo $row['video_url']?>"><img src="../upload/<?= $row["image"]; ?>" height="300px"style="margin-right:200"></a></td>
		<tr><td style="font-weight: bold;"><?php echo "Movie-name  : "?></td><td style="text-align: center;"><?php echo $row['movie_name']?></td></tr>
		<tr><td style="font-weight: bold;"><?php echo "Language  : "?></td><td style="text-align: center;"><?php echo $row['lang']?></td></tr>
		<tr><td style="font-weight: bold;"><?php echo "Cast  : "?></td><td style="text-align: center;"><?php echo $row['cast']?></td></tr>	
		<tr><td style="font-weight: bold;"><?php echo "Description  : "?></td><td style="text-align: center;"><?php echo $row['descr']?></td></tr>
		<tr><td style="font-weight: bold;"><?php echo "Release_year  : "?></td><td style="text-align: center;"><?php echo $row['release_year']?></td></tr>

		<tr>
      <td style="font-weight: bold;"><?php echo "Screen_day  : "?></td>
      <?php
        if($row['screen_day']!='')
        {
      ?>
          <td style="text-align: center;"><?php echo $row['screen_day']?></td>
      <?php 
        } 
        else
        {   
      ?>
          <td style="text-align: center;"><input type="button" name="no" value="Not available"></td>
      <?php
        }
      ?>
    </tr>

		<tr>
      <td style="font-weight: bold;"><?php echo "Screen_time  : "?></td>
      <?php
        if($row['screen_time']!='')
        {
      ?>
          <td style="text-align: center;"><?php echo $row['screen_time']?></td>
      <?php 
        } 
        else
        {   
      ?>
          <td style="text-align: center;"><input type="button" name="no" value="Not available"></td>
      <?php
        }
      ?>
    </tr>

		<tr>
      <td style="font-weight: bold;"><?php echo "Ticket-price  : "?></td>
      <?php
        if($row['t_price']!='')
        {
      ?>
          <td style="text-align: center;"><?php echo $row['t_price']?></td>
      <?php 
        } 
        else
        {   
      ?>
          <td style="text-align: center;"><input type="button" name="no" value="Not available"></td>
      <?php
        }
      ?>
    </tr>
    
<?php
if(isset($_SESSION['uname']))
{
		if($row['screen_day']!='')
		{
		?>
    <form action="checkout_mv.php" method="post">
       <tr>
        <td>No. of seats  :- <input type="number" required tile="Number of Seats" max="10" min="1" name="qty" value="1" style="text-align:center"/></td></tr>
       <?php
          $_SESSION['id'] = "$id";
          $stm=$row['screen_time'];
          $_SESSION['stm'] = "$stm";

       ?>
    <tr><td><input type="submit" name="buy" value="Buy Now" style="margin-left: 10px;"></td></tr></tr>
    </form>
   
		<?php 
		}	
		else
		{		
		?>
		<tr><td><input type="button" name="no" value="No show available"></td></tr></tr>
		<?php
		}
}
if(!isset($_SESSION['uname']))
{
    if($row['screen_day']!='')
    {
    ?>
    <form action="redir.php" method="post">
       <tr>
        <td>No. of seats  :- <input type="number" required tile="Number of Seats" max="10" min="1" name="qty" value="1" style="text-align:center"/></td></tr>
       <?php
          $_SESSION['id'] = "$id";
       ?>
    <tr><td><input type="submit" name="buy" value="Buy Now" style="margin-left: 10px;"></td></tr></tr>
    </form>
   
    <?php 
    } 
    else
    {   
    ?>
    <tr><td><input type="button" name="no" value="No show available"></td></tr></tr>
    <?php
    }
}
?>


	</table>
    <div style="height:200px;width:101.2%;background-color:black;margin-top:50px;float:left;margin-left: -8px;"><br><br><br><br>
        <font><a href="..\user\about.php" style="text-decoration: none;color: white;text-align: 'center'"><big>About Us |</big></a></font>
        <font><a href="..\user\contact.php" style="text-decoration: none;color: white;"><big>Contact Us</big></a></font><br><br>
        <font style="color: white;text-align: 'center'"><big>&copy 2020-21, NEXUS theater, India</big></font>
    </div>
	</body>
	</html>
<?php 
}
?>
</body>
</html>
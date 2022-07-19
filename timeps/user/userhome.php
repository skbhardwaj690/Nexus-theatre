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
}
else
{
  header("location:../index.php");
}
?>

  <u><h1 style="text-decoration: none;color: black;margin-top:200px; margin-left: 10px">Animated movies :- </h1></u>
  <a href="viewmv.php?id=1"><img  src="..\upload\delhi1.jpg" style="margin-left: 10px;margin-top: 10px; height: 300px;width: 30%;"></a>
  <a href="viewmv.php?id=8"><img  src="..\upload\broly1.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
  <a href="viewmv.php?id=9"><img  src="..\upload\ang2.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
  <a href="viewmv.php?id=1" style="text-decoration: none;margin-left: 160px;"><big>Delhi Safari</big></a>
  <a href="viewmv.php?id=8" style="text-decoration: none; margin-left: 360px;"><big>Dragon Ball</big></a>
  <a href="viewmv.php?id=9" style="text-decoration: none; margin-left: 360px;"><big>Angry Birds 2</big></a>


   <u><h1 style="text-decoration: none;color: black;margin-top:100px; margin-left: 10px">Indian movies :- </h1></u>
   <a href="viewmv.php?id=10"><img  src="..\upload\master.jpg" style="margin-left: 10px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=11"><img  src="..\upload\krrish1.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=2"><img  src="..\upload\karnan.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=10" style="text-decoration: none;margin-left: 170px;"><big>Master</big></a>
   <a href="viewmv.php?id=11" style="text-decoration: none; margin-left: 400px;"><big>Krrish3</big></a>
   <a href="viewmv.php?id=2" style="text-decoration: none; margin-left: 400px;"><big>Karnan</big></a>

   <u><h1 style="text-decoration: none;color: black;margin-top:100px; margin-left: 10px">Hollywood movies :- </h1></u>
   <a href="viewmv.php?id=3"><img  src="..\upload\kombat.jpg" style="margin-left: 10px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=12"><img  src="..\upload\godzilla.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=14"><img  src="..\upload\justice.jpg" style="margin-left: 50px;margin-top: 10px; height: 300px;width: 30%;"></a>
   <a href="viewmv.php?id=3" style="text-decoration: none;margin-left: 160px;"><big>Mortal Kombat</big></a>
   <a href="viewmv.php?id=12" style="text-decoration: none; margin-left: 310px;"><big>Godzilla v/s Kong</big></a>
   <a href="viewmv.php?id=14" style="text-decoration: none; margin-left: 260px;"><big>Zack Snyder's Justice League</big></a>


	<div style="height:200px;width:101.2%;background-color:black;margin-top:100px;float:left;margin-left: -8px;"><br><br><br><br>
        <font><a href="..\user\about.php" style="text-decoration: none;color: white;margin-left:600px;"><big>About Us |</big></a></font>
        <font><a href="..\user\contact.php" style="text-decoration: none;color: white;"><big>Contact Us</big></a></font><br><br>
        <font style="color: white;margin-left: 555px;"><big>&copy 2020-21, Nexus theater, India</big></font>
    </div>

</body>
</html>

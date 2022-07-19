<!DOCTYPE html>
<html>
<head>
    <title>About US</title>
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

<br><br><br><br><br><br><br><br><br><br><br>
<h1 align="center">About Us</h1><br>
<h3 style="margin-bottom: 151px;"> <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We NEXUS theater are new in this field of theaters, but we promise to show you the latest and classic movies from our catalogue. Our Secure online ticket booking website encrypts your personal and financial information to ensure your order information is protected. Our website locks all critical information passed from you to us, such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.</p><br><p align="center"> Address :- NEXUS theater,Inside Gate-no.2,Opposite Balaji wafers pvt ltd,Metoda Rajkot Gujrat - 360021</p></h3>


    <div style="height:200px;width:101.2%;background-color:black;margin-top:13px;float:left;margin-left: -8px;"><br><br><br><br>
        <font><a href="..\user\about.php" style="text-decoration: none;color: white;margin-left:620px;"><big>About Us |</big></a></font>
        <font><a href="..\user\contact.php" style="text-decoration: none;color: white;"><big>Contact Us</big></a></font><br><br>
        <font style="color: white;margin-left: 570px;text-align: center;"><big>&copy 2020-21, NEXUS theater, India</big></font>
    </div>
</body>
</html>

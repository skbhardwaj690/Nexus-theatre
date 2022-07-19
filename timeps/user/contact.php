<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
</head>
<style>
body /*For body desing*/
{
   /* background-image: url("../user/uimg/conimg.jpg");*/
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
	background-blend-mode: overlay;
}
#contact /*For whole contact area desing*/
{
	width:200px;
	border-radius: 10px;
	font-family:raleway;
	border: 2px solid black;
	padding: 0px 90px 0px;
	margin: 0% 45%;
}
input[type=text],input[type=email],input[type=button] /*For input desing (username,password)*/
{
	width:146%;
	border-radius: 10px;
	padding: 8px;
	margin-top: 12px;
	margin-left: -70px;
	border: 1px solid #ccc;
	padding-left: 15px;
	font-size: 16px;
	font-family:raleway;
} 
textarea
{
    width: 146%;
    margin-top: -6px;
	margin-left: -70px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
	font-size: 16px;
	font-family:raleway;
}
input[type=submit] /*For submit button("Login")*/
{
	width: 85%;
	background-color:#12AB00;
	color: black;
	border: 2px solid #12AB00;
	padding: 10px;
	font-size:20px;
	cursor:pointer;
	border-radius: 5px;
	margin-top: -8px;
	margin-bottom: 10px;
	margin-left: 20px;
}
hr/*hr tag for spacing where hr tag given*/
{
	border:0;
	border-bottom:2px solid black;
	margin: 10px -92px;
	margin-bottom: 20px;
}
.content /* Black background with transparency */
{
    position: absolute;
    background: rgba(0, 0, 0, 0.9);
    color: #f1f1f1;/*all fonts on transparent block*/
}
</style>

<?php
session_start();
$um=$_SESSION['uname'];
if(isset($_SESSION['uname']))
{
?>

<body>

<br><br><br><br>
	<div id="contact" class="content">
	<form action="contactus.php" method="POST">
	<div>
		<input type="text" name="name" align="left" placeholder="Name...." required>
	</div><hr/>
	<div>
		<input type="text" name="email" placeholder="Email...." required style="margin-top: -8px;">
	</div><hr/>
	<div>
        <textarea id="textare" name="msg" placeholder="Write Your Massage..." style="height:200px"></textarea>
	</div><hr/>
	<div>
		<input type="submit" value="Submit" name="submit">
	</div>
	</form>
	</div>
	<div style="width:250px;font-family:times new roman;margin: 0% 10%;margin-top: 100px">
		<h1 style="font-size:45px;">Contact Us</h1><br>
	</div>
	<div style="width:250px;font-family:times new roman;margin: 0% 20%;margin-top: -30px">
		<ul><li><h3>nexus123@gmail.com</h3></li></ul><br>
	</div>
	<div style="width:250px;font-family:times new roman;margin: 0% 20%;margin-top: -30px">
		<ul><li><h3>+911489087895</h3></ul></li><br>
	</div>
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
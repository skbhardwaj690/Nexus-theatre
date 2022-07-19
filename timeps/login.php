<html>
<head>
	<title>LOGIN PAGE</title>
<style>
body /*For body desing*/
{
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
	background-blend-mode: overlay;
}
#login /*For whole login area desing*/
{
	width:300px;
	border-radius: 10px;
	font-family:raleway;
	border: 2px solid black;
	padding: 0px 90px 0px;
	margin-top: 70px;
	margin: 0% 31%;
}
input[type=text],input[type=email],input[type=password],input[type=button] /*For input desing (username,password)*/
{
	width:100%;
	padding: 5px;
	margin-top: 5px;
	border: 1px solid #ccc;
	padding-left: 5px;
	font-size: 16px;
	font-family:raleway;
} 
input[type=submit] /*For submit button("Login")*/
{
	width: 85%;
	background-color:yellow;
	color: black;
	border: 2px solid black;
	padding: 10px;
	font-size:20px;
	cursor:pointer;
	border-radius: 5px;
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
</head>

<body><br><br><br><br><br><br>
	<div id="login" class="content">
	<h1 align="center" style="font-size:45px;margin-bottom: 0px;margin-top: 0px"><font 

color="lightgreen">Login</font></h1><hr/>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<h3>USER ID &nbsp; &nbsp; &nbsp; &nbsp;: </h3><input type="text" name="user" align="left" placeholder="Phone no." 

required>
	</div><hr/>
	<div>
		<h3>PASSWORD&nbsp; :</h3><input type="password" name="password" placeholder="Password" required>
	</div><hr/>
	<div>
		<input type="submit" value="Login" name="login">
	</div>
	<b align="center" style="margin-left: 10px;">If Account is not available then cilck here</b><center><a href="newacc.php" style="color:cyan;"> Create new account</a></center>
	</form>
	</div>
</body>
</html>


<?php

	$conn=mysqli_connect("localhost","root","","tp");

	if(isset($_POST['login'])){
					
					$uname = $_POST['user'];
					$pass = $_POST['password'];
					
					$query = "SELECT * FROM admin WHERE uname = '".$uname."' AND password = '".$pass."'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									window.location = (\"admin/admin.php\")
									</script>";
					}
					elseif($num <= 0)
					{
						$temp = md5($_POST['password']);
						$pass = $temp;
						$query = "SELECT * FROM tb_registration WHERE phone = '".$uname."' AND password = '".$pass."'";
						$rs = $conn->query($query);
						$num = $rs->num_rows;
						$rows = $rs->fetch_assoc();
						if($num > 0){
							session_start();
							$_SESSION['uname'] = $rows['uname'];
							$_SESSION['pass'] = $rows['pass'];
							echo "<script type = \"text/javascript\">
										window.location = (\"user/userhome.php\")
										</script>";
						}
						else
						{
							echo "<script type = \"text/javascript\">
									alert(\"Login Unsuccessful !\");
									window.location = (\"index.php\")
									</script>";
						}
					}
				}
			?>


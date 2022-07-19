<html>
<head>
	<title>New Account Page</title>
</head>

<style type="text/css">


body /*For body designing*/
{
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
	background-blend-mode: overlay;
}
#new
{
	width:280px;
	border-radius: 10px;
	font-family:raleway;
	border: 2px solid gray;
	padding: 0px 90px 0px;
	margin-top: 70px;
	margin: 0% 31%;

}
input[type=submit] /*For submit button("Login")*/
{
	width: 50%;
	background-color:yellow;
	color: black;
	border: 2px solid gray;
	padding: 5px;
	font-size:20px;
	cursor:pointer;
	border-radius: 5px;
	margin-bottom: 10px;
	margin-left: 70px;
}
.content 
{
    position: absolute;
    background: rgba(0, 0, 0, 0.9); /* Black background with transparency */
    color: #f1f1f1;
}

hr/*hr tag for spacing where hr tag given*/
{
	border:0;
	border-bottom:2px solid black;
	margin: 10px -92px;
	margin-bottom: 20px;
	border-color: gray;
}

</style>

<body>
<br><br><br><br>
<form action="que.php" method="POST">
	<div class=content id="new">
		<center><font color="lightgreen" size=4><b>Create New Account</b></font></center><hr/>
	<p>
	
	<div>
		Enter Name :
		<input type="text" name="uname" style=width:283px; placeholder="Enter Your Name" required>
	</div><hr/>
	

	<div>
		Password :
		<input type="password" name="password" style=width:283px; placeholder="Enter Password" required>
		
	</div><hr/>

	<div>
		Confirm Password :
		<input type="password" name="rpassword" style=width:283px; placeholder="Re-enter Password" required>
	
	</div><hr/>

	<div>
		Age :
		<input type="text" name="age" style=width:283px; placeholder="Age" required>
		
	</div><hr/>

	<div>
		Phone :
		<input type="text" name="phone" style=width:283px; placeholder="Phone no." required>
		
	</div><hr/>

	<div>
		Gender :
			<input type="radio" name="gender" value="male" checked>Male
  			<input type="radio" name="gender" value="female">Female
  			<input type="radio" name="gender" value="female">Other
	</div></br><hr/>

	<div>
		Email ID :
		<input type="email" name="email" style=width:283px; placeholder="Enter Email-ID" required>
		
	</div><hr/>

	<div>
		<input type="submit" name="submit" value="Sign Up" />
	</div>
	</p>
</form>
</body>
</html>
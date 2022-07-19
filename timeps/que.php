<?php
	if(isset($_POST['submit']))
	{
		$con=mysqli_connect("localhost","root","","tp");
 
		if($con==false)
		{
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		$user_name=mysqli_real_escape_string($con,$_POST['uname']);
		$password=mysqli_real_escape_string($con,md5($_POST['password']));
		$rpassword=mysqli_real_escape_string($con,md5($_POST['rpassword']));
		$age=mysqli_real_escape_string($con,$_POST['age']);
		$phone=mysqli_real_escape_string($con,$_POST['phone']);
		$gender=mysqli_real_escape_string($con,$_POST['gender']);
		$email=mysqli_real_escape_string($con,$_POST['email']);

		$emlque="SELECT * FROM tb_registration WHERE email = '".$email."'";
		$q=mysqli_query($con,$emlque);
		$emlcount=mysqli_num_rows($q);

		$pnque="SELECT * FROM tb_registration WHERE phone = '".$phone."'";
		$q1=mysqli_query($con,$pnque);
		$pncount=mysqli_num_rows($q1);



		if ($emlcount>0) {
			echo "This email already exists.......";
		}
		else if ($pncount>0) {
			echo "This phone no. already exists.......";
		}
	
		else
		{
			if($password!=$rpassword)
			{
				echo "Both passwords must be same";
			}
	
			else
			{
				if(isset($_SESSION['error']['user_name']))
				{
					echo '<font color="red">'.$_SESSION['error']['user_name'].'</font>';
				}

				if($user_name!='' and $gender!='' and $password!='' and $age!='' and $phone!='' and $email!='')
				{
	
 				//$con = new mysqli("localhost", "root", "");
					$sql = "INSERT INTO tb_registration (uname,password,age,phone,gender,email) VALUES ('$user_name','$password','$age','$phone','$gender','$email')";
					if(mysqli_query($con, $sql))
					{
						header('Location:login.php');
					} 
					else
					{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
					}
				}
				else
				{
					echo "Something went wrong";
				}	
			}
		}
		
	}
	mysqli_close($con);
?>
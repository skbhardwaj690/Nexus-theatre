<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
session_start();
if(isset($_POST['make']))
{
$um=$_SESSION['uname'];
$stm=$_SESSION['stm'];
$dt=$_SESSION['dt'];
$qt=$_SESSION['qt'];
$mn=$_SESSION['mn'];
$otp=$_POST['otp'];
include('db.php');
$con = new mysqli("localhost", "root", "","tp");
 $query="SELECT * FROM tb_registration WHERE uname='".$um."'";
 $sql=mysqli_query($con,$query);
  
 while($row=mysqli_fetch_assoc($sql))
{ 
	$pn=$row['phone'];
	$em=$row['email'];
}

if($otp=="123456")
{
	include('db.php');
    $con = new mysqli("localhost", "root", "","tp");
	$query="INSERT INTO tb_ticket(uname,email,phone,qty,movie_name,show_date,show_time) values('$um','$em','$pn','$qt','$mn','$dt','$stm')";
    if (!mysqli_query($con, $query))
	{
		die('Error:' .mysqli_error($con));
	} 
	else
	{
		?>
		<body><table align='center'><tr><td><STRONG>Transaction is being processed,</STRONG></td></tr><tr><td><font color='blue'>Please wait <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Please do not press 'Refresh' or 'Back' button )</td></tr></table><h2>
<script>
    setTimeout(function(){ window.location="mv_bill.php"; }, 5000);
</script>
	<?php
	}
}
else
{
    ?>
    <br><br><br>
    <CENTER><h1>Error :- You have entered wrong OTP....</h1></CENTER>
    <?php
}
		
}
?>





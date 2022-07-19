<html>
<head>
</head>

<style>
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;

}
.form {
  position: relative;
  z-index: 1;
  background: lightgreen;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form option{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

body {
  background-repeat: no-repeat;
  background-size: 1390px 2000px; 
}
body{
  margin:0;
  text-align: center;
}
}</style>
<br>
<br><br><br><br>


<body>
<?php
session_start();

if(isset($_POST['buy']))
{
  
  $id=$_SESSION['id'];
  $stm=$_SESSION['stm'];
  $qt=$_POST['qty'];
  include ("db.php");
  $_SESSION['qt']="$qt";
  $query="SELECT * FROM tb_movie WHERE id='".$id."'";
  $sql=mysqli_query($con,$query);
  
  while($rows=mysqli_fetch_assoc($sql))
	{
  ?>


  <h2 align="center" style="margin-top: 1px;">
    Address :- NEXUS theater,Inside Gate-no.2,Opposite Balaji wafers pvt ltd,Metoda Rajkot Gujrat - 360021
  </h2>

<div class="login-page">
  <div class="form">
 
    <form class="login-form" action="checkout_mv1.php" method="post">

    <b style="float: left;">Choose Date :- </b><input type="date" placeholder="Date" name="date" required/>
    <b style="float: left;">Amount :- </b><input type="text" name="amount" style="text-align:center" value="<?php echo $rows['t_price'] * $qt;?>" required readonly/>
    <b style="float: left;">Movie name :- </b><input type="text" name="movie_name" style="text-align:center" value="<?php echo $rows['movie_name'] ?>" required readonly/>
    <br><br>
    <input style="background-color: green; color: white; width: 180px;" type="Submit" value="Submit" name="checko1">

    </form>
  </div>
</div>
  <?php 
}
}
  ?>


  
</body>
</html>
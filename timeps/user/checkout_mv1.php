
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
  padding: 35px;
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
   /*background-image: url("uimg/citty.jpg");*/
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

if(isset($_POST['checko1']))
{
  $id=$_SESSION['id'];
  $stm=$_SESSION['stm'];
  $dt=$_POST['date'];
  $amt=$_POST['amount'];
  $mn=$_POST['movie_name'];
  $Timestamp = strtotime($dt);
  $day = date("l", $Timestamp);

  $_SESSION['dt']="$dt";
  $_SESSION['mn']="$mn";
  $_SESSION['amt']="$amt";

  $td = date("Y-m-d");

  if ($dt<$td) {
 	echo "<script type = \"text/javascript\">
	alert(\"You have selected wrong date....... !\");
	window.location = (\"userhome.php\")
	</script>";
  }
  
  if (($day!='Monday' & $day!='Wednesday')  & $id==1) 
  {
  	echo "<script type = \"text/javascript\">
	alert(\"You have selected wrong date....... !\");
	window.location = (\"viewmv.php?id=1\")
	</script>";
  }
  if (($day!='Wednesday' & $day!='Friday') & $id==2) 
  {
  	echo "<script type = \"text/javascript\">
	alert(\"You have selected wrong date....... !\");
	window.location = (\"viewmv.php?id=2\")
	</script>";
  }
  if (($day!='Friday' & $day!='Monday') & $id==3) 
  {
  	echo "<script type = \"text/javascript\">
	alert(\"You have selected wrong date....... !\");
	window.location = (\"viewmv.php?id=3\")
	</script>";
  }

  if (($day!='Tuesday' & $day!='Saturday')  & $id==10) 
  {
    echo "<script type = \"text/javascript\">
  alert(\"You have selected wrong date....... !\");
  window.location = (\"viewmv.php?id=10\")
  </script>";
  }
  if (($day!='Saturday' & $day!='Thursday') & $id==11) 
  {
    echo "<script type = \"text/javascript\">
  alert(\"You have selected wrong date....... !\");
  window.location = (\"viewmv.php?id=11\")
  </script>";
  }
  if (($day!='Tuesday' & $day!='Thursday') & $id==12) 
  {
    echo "<script type = \"text/javascript\">
  alert(\"You have selected wrong date....... !\");
  window.location = (\"viewmv.php?id=12\")
  </script>";
  }
?>
  
<u><h1 align="center" style="margin-top: 1px;">
    Payment :-
  </h1></u>
  
<div class="login-page">
  <div class="form">
 
    <form class="login-form" action="checkout_mv2.php" method="post">
    <b style="float: left;">Cardholder's name :-</b> <input type="text" placeholder="Name" name="cardnm" style="text-align:center" required />
    <b style="float: left;">Card no. :- </b><input type="text" placeholder="Cardno" name="cardn" style="text-align:center" minlength="16" maxlength="16" required />
    <b style="float: left;">Expiry date :- </b><input type="date" placeholder="Expiry date" name="carddt" required />
    <b style="float: left;">CVV :- </b><input type="password" placeholder="CVV" name="cvv" style="text-align:center" minlength="3" maxlength="3" required />
    <br><br>
    <input style="background-color: green; color: white; width: 180px;" type="submit" value="Make Payment" name="checko2">

    </form>
  </div>
</div>
  <?php 

}
  ?>
</body>
</html>

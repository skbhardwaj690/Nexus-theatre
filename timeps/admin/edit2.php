<?php
	include('db.php');
	$id=$_REQUEST['id'];
	$query = "SELECT * from tb_movie where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error($con));
	$row = mysqli_fetch_assoc($result);
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Record</title>
	    <link rel="shortcut icon" type="..\admin" href="nexus.png">	
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<div class="form" style="margin-left: 600px;margin-top: -5px;">
			<h1>Edit Record</h1>
			<?php
				$status = "";
				if(isset($_POST['new']) && $_POST['new']==1)
				{
					$id=$_REQUEST['id'];
					$mov =$_REQUEST['movie_name'];
					$lang =$_REQUEST['lang'];
					$cat =$_REQUEST['cast'];
					$des =$_REQUEST['descr'];
					$rel =$_REQUEST['release_year'];
					$url =$_REQUEST['video_url'];
					$tp=$_REQUEST['t_price'];
					$sday = $_REQUEST['screen_day'];
					$stime =$_REQUEST['screen_time'];
		
					$file = $_FILES['image'];
					$file_name = $file['name'];
					$file_type = $file ['type'];
					$file_size = $file ['size'];
					$file_path = $file ['tmp_name'];
					
					if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)

					if(move_uploaded_file ($file_path,'../upload/'.$file_name))//"images" is just a folder name here we will load the file.
					$con = new mysqli("localhost", "root", "","tp");
					$update="update tb_movie set movie_name='".$mov."', lang='".$lang."', cast='".$cat."', descr='".$des."', release_year='".$rel."', image='".$file_name."', video_url='".$url."', t_price='".$tp."', screen_day='".$sday."', screen_time='".$stime."' where id='".$id."'";
					mysqli_query($con, $update) or die(mysqli_error());
					header("Location: edit-movie.php");
				}
				else 
				{
			?>
			<div>
				<form name="form" method="post" action="" enctype="multipart/form-data"> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
					<p><input type="text" name="movie_name" placeholder="Movie-name" required value="<?php echo $row['movie_name'];?>"/></p>

					<p><input type="text" name="lang" placeholder="Language" required value="<?php echo $row['lang'];?>"/></p>
					
					<p><input type="text" name="cast" placeholder="Cast" required value="<?php echo $row['cast'];?>"/></p>
					
					<p><input type="text" name="descr" placeholder="Description" required value="<?php echo $row['descr'];?>"/></p>

					<p><input type="text" name="release_year" placeholder="Release year" required value="<?php echo $row['release_year'];?>"/></p>
					
					<p><input type="text" name="video_url" placeholder="Video URL" required value="<?php echo $row['video_url'];?>"/></p>

					<p><input type="text" name="t_price" placeholder="Ticket price" value="<?php echo $row['t_price'];?>"/></p>


					<p><input type="text" name="screen_day" placeholder="Screen day" value="<?php echo $row['screen_day'];?>"/></p>
					
					<p><input type="text" name="screen_time" placeholder="Screen time" value="<?php echo $row['screen_time'];?>"/></p>

					<p><input type="file" name="image" placeholder="Choose Image" required value="<?php echo $row['image'];?>"/></p>

					<p><input name="submit" type="submit" value="Update" /></p>
				</form>
			<?php 
				} 
			?>

				<br /><br /><br /><br />
			</div>
		</div>
	</body>
</html>

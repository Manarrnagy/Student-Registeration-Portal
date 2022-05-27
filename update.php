<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>

<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="style.css" >
	<meta charset="UTF-8" />
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body>

<?php
	include "config.php";
	$regNo = $_SESSION["loggedUser"];
	$viewStudent = "SELECT * FROM students WHERE regNo = '$regNo'";
	
	$result = mysqli_query($con,$viewStudent);
	if(!$result){
		echo "Error: ".mysqli_error($con);
	}
	
	$row = mysqli_fetch_array($result);
	$firstName = $row["firstName"];
	$lastName =  $row["lastName"];
	$reg = $row["regNo"];
	$department = $row["department"];
	$email = $row["email"];
	$mobile = $row["mobile"];
	$img = $row["image"];
	if (isset($_POST['submit'])) {
		move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
		$q = mysqli_query($con,"UPDATE students SET image='".$_FILES['file']['name']."'WHERE regNo='".$regNo."'");
	}
?>
<br>
<div id="myDiv">
	<h1 align='center'>Student Information</h1>
	<form onsubmit="return validation()" method="post" name="regForm" enctype="multipart/form-data">
		<div align="center">
		<?php
			if ($img=="") {
				echo "<img width='100'height='100' src='pictures/default.png' alt='Default picture pic'>";
			}
			else{
				echo "<img width='100'height='100' src='pictures/".$img."' alt=' profile picture'>";
			}
        echo "<br>";
      
		?> 
		<input type="file" name="file">
		<input style="align:center; font-size:15px;" type="submit" name="submit" >
		</div>
		
		
	</form>
	<h3>First Name:</h3>
	<p style="float:left; font-size:16px;"><?php echo $firstName?></p>
	<input style="float:right; font-size:15x; width:20%;" onclick="location.href='updatefn.php'" type="submit" value="Update" />
	<br><br>
	<h3>Last Name:</h3>
	<p style="float:left; font-size:16px;"><?php echo $lastName?></p>
	<input style="float:right; font-size:15x; width:20%;" onclick="location.href='updateln.php'" type="submit" value="Update" />
	<br><br>
	<h3>Department:</h3>
	<p style="float:left; font-size:16px;"><?php echo $department?></p>
	<input style="float:right; font-size:15x; width:20%;" onclick="location.href='updatedep.php'" type="submit" value="Update" />
	<br><br>
	<h3>Email:</h3>
	<p style="float:left; font-size:16px;"><?php echo $email?></p>
	<input style="float:right; font-size:15x; width:20%;" onclick="location.href='updateemail.php'" type="submit" value="Update" />
	<br><br>
	<h3>Mobile:</h3>
	<p style="float:left; font-size:16px;"><?php echo $mobile?></p>
	<input style="float:right; font-size:15x; width:20%;" onclick="location.href='updatemobile.php'" type="submit" value="Update" />
	<br><br>
</div>
<br>
<div align="center">
		<button onclick="location.href='home.php'">Back to Home Page</button>
</div>

</body>

</html>
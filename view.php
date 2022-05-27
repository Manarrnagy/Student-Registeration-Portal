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
?>
<br><br><br><br>
<div id="myDiv">
<h1 align='center'>Student Information</h1>
	<div align="center">
	<?php
		if ($img=="") {
			echo "<img width='100'height='100' src='pictures/default.png' alt='Default picture pic'>";
		}
		else{
			echo "<img width='100'height='100' src='pictures/".$img."' alt=' profile picture'>";
		}
		echo "<br>";
	?> </div>
	
	<h3>First Name:</h3>
	<p><?php echo $firstName?></p>
	<h3>Last Name:</h3>
	<p><?php echo $lastName?></p>
	<h3>Department:</h3>
	<p><?php echo $department?></p>
	<h3>Email:</h3>
	<p><?php echo $email?></p>
	<h3>Mobile:</h3>
	<p><?php echo $mobile?></p>
</div>
<br>
<div align="center">
		<button onclick="location.href='home.php'">Back to Home Page</button>
</div>
</body>

</html>
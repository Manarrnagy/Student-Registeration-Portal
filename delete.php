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
?>
<br><br><br><br><br>
<div id="myDiv">
	<h1 align='center'>Student Information</h1>
	<h3>First Name:</h3>
	<p><?php echo $firstName?></p>
	<h3>Last Name:</h3>
	<p><?php echo $lastName?></p>
	<h3>Registration Number:</h3>
	<p><?php echo $regNo?></p>
	<h3>Department:</h3>
	<p><?php echo $department?></p>
	<h3>Email:</h3>
	<p><?php echo $email?></p>
	<h3>Mobile:</h3>
	<p><?php echo $mobile?></p>
	
	<button onclick="location.href='list.php'" style="font-size:20px; left:50%; display: block; margin-left: auto; 
	margin-right: auto;">Delete</button>
</div>
<br>
<div align="center">
		<button onclick="location.href='home.php'">Back to Home Page</button>
</div>
</body>

</html>
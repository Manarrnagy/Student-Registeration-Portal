<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>
<head>
	<title>Updated Students List</title>
	<link rel="stylesheet" type="text/css" href="style.css" >
	<meta charset="UTF-8" />
	<style>
		body{background-color:#008CBA;}
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
</style>
	</style>
</head>

<body>
<?php
	include "config.php";
	$regNo = $_SESSION["loggedUser"];
	$viewStudent = "DELETE FROM students WHERE regNo = '$regNo'";
	
	$result = mysqli_query($con,$viewStudent);
	if(!$result){
		echo "Error: ".mysqli_error($con);
	}
?>
<h3 style="text-align:center; color:white;">Student Deleted Successfully!</h3>
<br><br><br><br>
<h1 style="color:white; text-align:center;">List Of Current Students<h1>
<table>
<tr>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Registeration Number</th>
		<th>Department</th>
		<th>Email</th>
		<th>Mobile</th>
  </tr>
</tr>
<?php

	include "config.php";
	$viewStudent = "SELECT * FROM students";
	
	$result = mysqli_query($con,$viewStudent);
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<th>".$row["firstName"]."</th>";
		echo "<th>".$row["lastName"]."</th>";
		echo "<th>".$row["regNo"]."</th>";
		echo "<th>".$row["department"]."</th>";
		echo "<th>".$row["email"]."</th>";
		echo "<th>".$row["mobile"]."</th>";
		echo "</tr>";
	}
	if(!$result){
		echo "Error: ".mysqli_error($con);
	}

?>
</table>
<br>
<div align="center">
		<button onclick="location.href='home.php'">Back to Home Page</button>
</div>
</body>

</html>
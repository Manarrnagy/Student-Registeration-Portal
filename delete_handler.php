<?php

$regNo = $_POST["regNo"];


include "config.php";

$login = "SELECT * FROM students WHERE regNo='$regNo'";

$result = mysqli_query($con,$login);
$count = mysqli_num_rows($result);

if($count == 1)
{
	session_start();
	$_SESSION["loggedUser"] = $regNo;
	header('Location: delete.php');
}
else{
	echo "<h1 style='color:red; text-align:center;'>Invalid Registration</h1>";
	echo"<br><br><button onclick=\"location.href='delete_input.php'\"; style='background-color: red;
			display: block; color:white;
			width: 100%;padding: 30px 30px;font-size: 20px; align:center;';>Retry</button>";
	
}
?>
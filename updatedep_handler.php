<?php
session_start();
if( isset($_SESSION["loggedUser"])){
	$regNo= $_SESSION["loggedUser"];
}

$dep = $_POST["department"];

include "config.php";

$depp = "UPDATE students SET department='$dep' WHERE regNo='$regNo' ";
$result = mysqli_query($con,$depp);

if($result)
{
	header('Location: update.php');
}
else{
	echo "<h1 style='color:red; text-align:center;'>Invalid Registration</h1>";
	echo"<br><br><button onclick=\"location.href='update.php'\"; style='background-color: red;
			display: block; color:white;
			width: 100%;padding: 30px 30px;font-size: 20px; align:center;';>Retry</button>";
	
}
?>
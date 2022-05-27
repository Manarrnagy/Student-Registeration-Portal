<?php
session_start();
if( isset($_SESSION["loggedUser"])){
	$regNo= $_SESSION["loggedUser"];
}

$mobile = $_POST["mobile"];

include "config.php";

$mobilee = "UPDATE students SET mobile='$mobile' WHERE regNo='$regNo' ";
$result = mysqli_query($con,$mobilee);

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
<?php
session_start();
if( isset($_SESSION["loggedUser"])){
	$regNo= $_SESSION["loggedUser"];
}

$fn = $_POST["fn"];

include "config.php";

$fnn = "UPDATE students SET firstName='$fn' WHERE regNo='$regNo' ";
$result = mysqli_query($con,$fnn);

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
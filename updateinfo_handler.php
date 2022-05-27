<?php
session_start();
if( isset($_SESSION["loggedUser"])){
	$regNo= $_SESSION["loggedUser"];
}

$fn = $_POST["fn"];

$ln = $POST["ln"];

include "config.php";

$fnn = "UPDATE students SET firstName='$fn' WHERE regNo='$regNo' ";
$lnn = "UPDATE students SET lastName='$ln' WHERE regNo='$regNo' ";
$result1 = mysqli_query($con,$fnn);
$result2 = mysqli_query($con,$lnn);

if($result1 || $result2)
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
<?php


$email = $_POST["email"];
$password = $_POST["password"];


include "config.php";

$login = "SELECT email,password FROM admin WHERE email='$email' and password='$password'";

$result = mysqli_query($con,$login);
$count = mysqli_num_rows($result);

if($count == 1)
{
	session_start();
	$_SESSION["loggedUser"] = $email;
	header('Location: home.php');
}
else{
	echo "Invalid Registration number and Pin Code";
}
?>
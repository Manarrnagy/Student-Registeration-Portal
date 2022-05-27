<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$regNo = $_POST["regNo"];
$department = $_POST["department"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];


include "config.php";


$insertUser = "INSERT INTO students (firstName,lastName,regNo,department,email,mobile)
values ('$firstName','$lastName','$regNo','$department','$email','$mobile')";

$result = mysqli_query($con,$insertUser);
if($result){
	header("location: created.html");
}
else{
	echo "Error: ".mysqli_error($con);
}
?>

<?php
	
	$file = "student.json";
	include "config.php";
	$jsondata = file_get_contents($file);
	$json = json_decode($jsondata,true);
	
	foreach($json['student'] as $student){
		$firstName = $student['firstName'];
		$lastName = $student['lastName'];
		$regNo = $student['regNo'];
		$dep = $student['department'];
		$email = $student['email'];
		$mobile = $student['mobile'];
		//$img = $student['image'];
		//$q = mysqli_query($con,"UPDATE students SET image='".$img."'WHERE regNo='".$regNo."'");
	    $insertStudent = "INSERT INTO students(firstName,lastName,regNo,department,email,mobile)
		values ('$firstName','$lastName','$regNo','$dep','$email','$mobile')";
		$result = mysqli_query($con,$insertStudent);
		if($result){
			header("location: created.html");
		}
		else{
			echo "Error: ".mysqli_error($con);
		}
	}	
?>

<?php
	
	$file = "student.xml";
	$xmlfile = simplexml_load_file($file);
	include "config.php";
	foreach ($xmlfile->children() as $row) {
		$firstName = $row->fname;
		$lastName = $row->lname;
		$regNo = $row->regNo;
		$dep = $row->dep;
		$email = $row->email;
		$mobile = $row->mob;
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
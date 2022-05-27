<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>
<head>
	<title>Register Student</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="register_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
	
</head>

<body>
<br><br><br>
<div id="myDiv">
  <h3 align="center">Register Student</h3>
  <form onsubmit="return validation()" method="post" name="regForm" action="register_handler.php" >
		<label>First Name: *</label>
		<input type="text" name="firstName" placeholder="First Name" size="25" />
		<label>Last Name: *</label>
		<input type="text" name="lastName" placeholder="Last Name" size="25" />
		<label>Registration number: *</label>
		<input type="text" name="regNo" placeholder="Registration number" size="25" />
		<label>Department: </label>
		<br>
		<input type="radio" name="department" value="Computer Science"/><label>Computer Science</label>
		<br>
		<input type="radio" name="department" value="Information System"/><label>Information System</label>
		<br>
		<input type="radio" name="department" value="Software Engineering"/><label>Software Engineering</label>
		<br>
		<input type="radio" name="department" value="Multimedia and Computer Graphics"/><label>Multimedia and Computer Graphics</label>
		<br>
		<label>Email: *</label>
		<input type="text" name="email" size="25" placeholder="Your Email" />
		<label>Mobile: *</label>
		<input type="text" name="mobile" size="25" placeholder="Your Mobile" />

		<div align="center">
		<input type="submit" value="Register" />
		<input type="reset" value="Clear" onclick="clear2();" />
		<div>
  </form>

</div>
</body>

</html>
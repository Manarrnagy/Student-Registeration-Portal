<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>

<head>
	<title>Update Department</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="login_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
  <h1 align="center">Update Department</h3>
  <form method="post" action="updatedep_handler.php" >
		<br><br>
		<label style="font-size: 25px;">Update Department: *</label>
		<br>
		<input type="radio" name="department" value="Computer Science"/><label>Computer Science</label>
		<br>
		<input type="radio" name="department" value="Information System"/><label>Information System</label>
		<br>
		<input type="radio" name="department" value="Software Engineering"/><label>Software Engineering</label>
		<br>
		<input type="radio" name="department" value="Multimedia and Computer Graphics"/><label>Multimedia and Computer Graphics</label>
		<br>
		

		<div align="center">
		<input type="submit" value="Confirm" />
		<div>
  </form>
</div
</body>

</html>
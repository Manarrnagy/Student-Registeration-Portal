<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>

<head>
	<title>Update Last Name</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="login_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
  <h1 align="center">Update Last Name</h3>
  <form method="post" action="updateln_handler.php" >
		<br><br>
		<label style="font-size: 25px;">Update Last Name: *</label>
		<br>
		<input type="text" name="ln" placeholder="Last Name" size="25" align="center"/>
		

		<div align="center">
		<input type="submit" value="Confirm" />
		<div>
  </form>
</div
</body>

</html>
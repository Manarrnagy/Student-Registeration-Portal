<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>

<head>
	<title>Update Email</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="login_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
  <h1 align="center">Update Email</h3>
  <form method="post" action="updatemail_handler.php" >
		<br><br>
		<label style="font-size: 25px;">Update Email: *</label>
		<br>
		<input type="text" name="email" placeholder="Email" size="25" align="center"/>
		

		<div align="center">
		<input type="submit" value="Confirm" />
		<div>
  </form>
</div
</body>

</html>
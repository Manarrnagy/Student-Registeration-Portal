<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>

<head>
	<title>Update First Name</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="login_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
  <h1 align="center">Update First Name</h3>
  <form method="post" action="updatefn_handler.php" >
		<br><br>
		<label style="font-size: 25px;">Update First Name: *</label>
		<br>
		<input type="text" name="fn" placeholder="First Name" size="25" align="center"/>
		

		<div align="center">
		<input type="submit" value="Confirm" />
		<div>
  </form>
</div
</body>

</html>
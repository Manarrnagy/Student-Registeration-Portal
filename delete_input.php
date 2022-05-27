<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>
<head>
	<title>Delete</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="login_script.js"></script>
	<style>
		body{background-color:#008CBA;}
	</style>
</head>

<body><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
  <h1 align="center">Delete</h3>
  <form onsubmit="return validation()" method="post" name="regForm" action="delete_handler.php">
  
		<br><br>
		<label style="font-size: 25px;">Student's Registeration Number: *</label>
		<br>
		<input type="text" name="regNo" placeholder="Registeration Number" size="25" align="center"/>
		

		<div align="center">
		<input type="submit" value="Confirm" />
		<input type="reset" value="Clear" onclick="clear2();" />
		<div>
  </form>
</div>
</body>

</html>
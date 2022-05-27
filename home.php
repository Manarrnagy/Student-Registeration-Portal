<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8" />
	<style>
		h1{text-align: center;}
		button {
			border-radius: 4px;
			background-color: #008CBA; /* Blue */
			display: block;
			width: 100%;
			border: none;
			padding: 30px 30px;
			font-size: 30px;
			cursor: pointer;
			text-align: center;
			color: white;
			transition: all 0.5s;
			cursor: pointer;
			box-shadow: 0 9px #999;
		}
		button:hover {background-color: #004d66}

		button:active {
			background-color: #004d66;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		}
	</style>
</head>

<body>
<img src="aast.png" style="float: left;"  width="200" height="100">
<br>
<h1>Welcome to Administrator Home Page<h1>
<br>
<button onclick="location.href='register.php'">Register Student</button>
<br>
<button onclick="location.href='uploadfile.php'">Upload Student File</button>
<br>
<button onclick="location.href='view_input.php'">View Student</button>
<br>
<button onclick="location.href='update_input.php'">Update Student</button>
<br>
<button onclick="location.href='delete_input.php'">Delete Student</button>
<br>
<button onclick="location.href='logout.php'">Log Out</button>
<br>

</body>

</html>
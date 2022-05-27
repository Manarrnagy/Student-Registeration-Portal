<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>
<html>
<head>
	<title>Upload JSON File</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<style>
		body{background-color:#008CBA;}
		button {
			border-radius: 4px;
			background-color: #008CBA; /* Blue */
			display: block;
			width: 30%;
			border: none;
			padding: 6px 12px;
			font-size: 15px;
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
<br><br><br><br><br><br><br><br><br><br><br>
<div id="myDiv">
	<br><br>
    <h3 align="center">Upload JSON File</h3>
	<form method="post" name="regForm" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" >
	</form>
	<?php
		if (isset($_POST['submit'])) {
			header("location: file.php");
		}
	?>	
</div>
</body>

</html>
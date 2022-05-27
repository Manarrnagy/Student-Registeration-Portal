<?php

$con = mysqli_connect("localhost","root","") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"manage") or die("Error: Can't Connect to Database");

?>
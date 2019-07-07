<?php
	session_start();
	
	$hostname = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "okolea";
	
	$connection = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
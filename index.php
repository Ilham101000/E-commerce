<?php
	session_start();

	if(!isset($_SESSION["masuk"]) ) {
		header("location:login.php");
		exit;
	}

	require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logam Mulia</title>
</head>
<body>
<center><a href="logout.php"><input type="button" value="Logout"></a></center>
    
</body>
</html>
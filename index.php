<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Area Navigation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100; 300; 400; 500; 700; 900&display=swap"
	rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	<label for="check">

	</label>
	<div class="left_side">
	<h3>ADMIN</h3>
	</div>
	</header>
	<div class="side-nav">
		<div class="logo">
		<img src="logo.png" alt="Logo" class="image">
		</div>
		<a href="index.php"><i class="fa fa-desktop"><span>  Dashboard</span></i></a>
		<a href="components.php"><i class="fa fa-cogs"><span>  Student Information</span></i></a>
		<a href="upload/upload.html"><i class="fa fa-upload"><span>  File Upload</span></i></a>
		<a href="adminlogout.php"><i class="fa fa-sign-out"><span>  Logout</span></i></a>
	</div>
	<div class="banner"></div>
</body>
</html>
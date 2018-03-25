<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PAGE 2</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
      
	  <link rel="icon" href="img/LogoLogin.png"> 
	<link rel="stylesheet" href="Login_css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="Login_css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Welcome</h1>
		</div>
		<center>
		<div >
		<h6><br><h6>
		<div class="page-header">
                 <h1 style="color:white">Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to Page 2 after successful logging in.</h1><br/><br/>
                </div>
                 <p><a href="logout.php" class="btn btn-danger">
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Log Out">
		</div></a>
		</center>
	</div>
</body>
</html>


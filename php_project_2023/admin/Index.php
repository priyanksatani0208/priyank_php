<?php

if(isset($_SESSION['email']))
{
	echo "<script>
	window.location='dashboard';
	</script>";
}
else
{
	
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Mobile service provider</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index">MSP </a></h1>
		<h1><a href="index">Admin Login  </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form method="post" > 
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" placeholder="Email" required="" name="admin_email">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="" name="password">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="submit">
				</label>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	<?php
include_once('footer.php');
?>

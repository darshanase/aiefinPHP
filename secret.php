<?php

require_once "libs/UserManager.php";
$um = new UserManager();
$user = $um->getSession();
if(!$user)
	header('location: login.php');

?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Logged In</title>

<style type="text/css">

html, body { margin: 0; padding: 0; }
body { 
	text-align: center; 
	background-color:#252525; 
	font-family: Verdana, Arial;
	font-size: 12px;
}

#wrapper {
	margin: 0 auto;
	width: 600px;
	text-align: left;
}

.loginbox {
	margin-top: 20px;
	padding: 10px;
	border: 1px solid #ccc;
	background-color: #ffffff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}

form label {
	display: inline;
	float: left;
	padding: 3px 10px;
	text-align: right;
}

form input {
	display: inline;
	float: left;
	padding: 3px;
	margin-right: 10px;
}
</style>

</head>
<body>
<div id="wrapper">
	<div class="loginbox">
		<h1>Success!</h1>
		<h3>Welcome, <?php echo $user->get('username'); ?>!</h3>
		<p>If you can see this, you have you successfully logged in</p>
		<p><a href="logout.php" title="Logout">Do you want to logout?</a></p>
	</div>
</div>
</body>
</html>

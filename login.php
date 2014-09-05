<?php
if(isset($_POST['action'])
	&& $_POST['action'] == 'login')
{
	require_once "libs/UserManager.php";
	$um = new UserManager();
	
	$user = $um->login($_POST['username'], $_POST['password']);
	if(!$user)
		exit("Login Failed");
	
	header("Location: secret.php");
}
?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Login</title>

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
		<h1>Login</h1>
		<form name="zhlogin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input name="action" value="login" type="hidden"/>
			<label for="username">Username</label><input type="text" name="username"/>
			<label for="password">Password</label><input type="password" name="password"/>
			<input type="submit" value="Submit" />
			<br style="clear:both;" />
		</form>
	</div>
</div>
</body>
</html>

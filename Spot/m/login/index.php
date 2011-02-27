<?php
Session_start();
if(isset($_SESSION['user'])){
header('Location: ../');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="../pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="../css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Spot Mobile</title>
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="now completly styles thanks to css these form elements are lighter and easier to use than ever before." name="description" />
</head>

<body>

<div id="topbar">
	<div id="leftnav">
		<a href="../../../"><img alt="home" src="../images/home.png" /></a></div>
		</div>
		<div id="title">Spot Login</div>
<div id="content">
	<ul class="pageitem">
		<li class="textbox"><span class="header">Spot Mobile</span>Edit your site with your mobile device!</li>
	</ul>
	<form method="post" action="login.php">
		<span class="graytitle">Enter Details</span>
		<ul class="pageitem">
			<li class="smallfield"><span class="name">Name</span><input name="user" placeholder="Bob" type="text" />
			</li>
			<li class="smallfield"><span class="name">Password</span><input name="pass" placeholder="password" type="password" />
			</li>
			<li class="button"><input name="Submit" type="submit" value="Log in" /></li>
	</ul>		
		</fieldset></form>
</div>
<div id="footer">
	<a href="http://iwebkit.net">Powered by iWebKit</a></div>

</body>

</html>

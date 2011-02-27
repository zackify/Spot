<?php
session_start();
require('../../start.php');
if(isset($_POST['user'])){
$user = $_POST['user'];
$pass = hash('sha256',$_POST['pass']);
if($pass == "" || $user == ""){
$error .= "Can't have an empty user or pass now can we?";
}
$result = mysql_query("SELECT user,id FROM users WHERE pass='$pass' AND user='$user'");
if(mysql_num_rows($result) == 0){
$error = "Sorry, your username or password is incorrect.";

}
else{
if(empty($error)){
$row = mysql_fetch_array($result);
$_SESSION['user'] = $row['user'];
$_SESSION['id'] = $row['id'];
$_SESSION['mobile'] = 1;
header('Location: ../');
}
}
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
<script src="../javascript/functions.js" type="text/javascript"></script>
<title>Spot Mobile</title>
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="keywords" />
<meta content="now completly styles thanks to css these form elements are lighter and easier to use than ever before." name="description" />
</head>

<body>

<div id="topbar">
	<div id="leftnav">
		<a href=""><img alt="home" src="../images/home.png" /></a><a href="index.php">Retry</a></div>
		</div>
		<div id="title">Spot Login</div>
<div id="content">
	<ul class="pageitem">
		<li class="textbox"><span class="header">Error</span><?php echo $error;?></li>
	</ul>
</div>
<div id="footer">
	<a href="http://iwebkit.net">Powered by iWebKit</a></div>

</body>

</html>
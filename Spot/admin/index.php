<?php
session_start();
require('../start.php');
if(isset($_POST['user'])){
$user = $_POST['user'];
$pass = hash('sha256',$_POST['pass']);
if($pass == "" || $user == ""){
$error = "Can't have an empty user or pass ";
}
$result = mysql_query("SELECT user,id FROM users WHERE pass='$pass' AND user='$user'");
if(mysql_num_rows($result) == 0){
if(isset($error)){
$error .= "and obviously, your username or password is incorrect.";
}
else{
$error .= "Your username or password is incorrect.";

}
}
else{
if(empty($error)){
$row = mysql_fetch_array($result);
$_SESSION['user'] = $row['user'];
$_SESSION['id'] = $row['id'];
header('Location: ../../');
}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0047)http://www.threestyles.com/CSS3-login-form.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Spot Login</title>
	<script type="text/javascript">
if (screen.width <= 699) {
document.location = "../m";
}
if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))|| (navigator.userAgent.match(/Android/i))) {
   location.replace("../m");
}
</script>
	<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;outline: none;
	}

	body {
		background: #4E0085;
	}

	form {
		border: 1px solid #270644;
		width: 250px;
		-moz-border-radius: 20px;
		-webkit-border-radius: 20px;
		background:  -moz-linear-gradient(19% 75% 90deg,#4E0085, #963AD6);
		background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#4E0085));
		margin:50px auto;
		padding: 20px;
		-moz-box-shadow:0px -5px 300px #270644;
		-webkit-box-shadow:0px -5px 300px #270644;
	}

	label {
		font-size: 12px;
		font-family: arial, sans-serif;
		list-style-type: none;
		color: #fff;
		text-shadow: #000 1px 1px;
		margin-bottom: 10px;
		font-weight: bold;
		letter-spacing: 1px;
		text-transform: uppercase;
		display: block;
	}

	input {
	  -webkit-transition-property: -webkit-box-shadow, background;
	  -webkit-transition-duration: 0.25s;
	  	padding: 6px;
		border-bottom: 0px;
		border-left: 0px;
		border-right: 0px;
		border-top: 1px solid #ad64e0;
		-moz-box-shadow: 0px 0px 2px #000;
		-webkit-box-shadow: 0px 0px 2px #000;
		margin-bottom: 10px;
		background: #8a33c6;
		width: 230px;
	}

	input.submit {
	  -webkit-transition-property: -webkit-box-shadow, background;
	  -webkit-transition-duration: 0.25s;
		width: 100px;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));	
		background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
		color: #fff;
		text-transform: uppercase;
		text-shadow: #000 1px 1px;
		border-top: 1px solid #ad64e0;
		margin-top: 10px;
	}

	input.submit:hover {
		-webkit-box-shadow: 0px 0px 2px #000;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));
		background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
	} 

	input.submit:active {
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#781bb9), to(#963AD6));
		background:  -moz-linear-gradient(19% 75% 90deg,#963AD6, #781bb9);
	}

	input:hover {
		-webkit-box-shadow: 0px 0px 4px #000;
		background: #9d39e1;
	}
	</style>
</head>

<body>
<form action="index.php" method="post">
	<?php 
	if(isset($error)){
	echo '<center><label>'.$error.'</label></center>';
	}
	?>
		<label>Username:</label>
			<input type="text" name="user" placeholder="Admin">
		<label>Password:</label>
			<input type="password" name="pass" placeholder="****">
			<input type="submit" value="Submit" name="submit" class="submit">
</form>	



</body></html>
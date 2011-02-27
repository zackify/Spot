<?php 
session_start();
if(!isset($_SESSION['user'])){
header('Location: login');
}
require('../start.php');
if(isset($_POST['title'])){
$id = $_POST['title'];
$text = $_POST['text'];
mysql_query("UPDATE content SET text='$text' WHERE id=$id") or die(mysql_error());

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="../javascript/functions.js" type="text/javascript"></script>
<script src="../jquery.js" type="text/javascript"></script>
<title>Spot Admin Panel</title>
<script>
$(document).ready(function(){
 
$('#selectbox').change("click", function(){
var title = jQuery('#selectbox option:selected').text();
$.ajax({
   type: "POST",
   url: "../ajax.php",
   data: "title="+title,
   success: function(msg){
     $('textarea').text(msg);
   }
 });
 });
 
 });

 </script>
</head>

<body>

<div id="topbar">
<div id="title">Spot</div>
	<div id="leftnav">
		<a href="../../"><img alt="home" src="images/home.png" /></a></div>
	</div>
	<div id="rightbutton">
		<a href="login/logout.php">Log out</a></div>
	</div>
	<div id="content">
	<ul class="pageitem">
		<li class="textbox"><span class="header">Admin Panel</span>Welcome back, <?php echo ucfirst($_SESSION['user']);?>. All you need to do is choose a category and click edit!</li>
	</ul>
	<form action="index.php" method="post">
		<span class="graytitle">Choose what to edit</span>
		<ul class="pageitem">
			<li class="select"><select id="selectbox" name="title">
			<option>Choose</option>
			<?php
			echo box_items();
			?>
			</select><span class="arrow"></span> </li>
			<li class="textbox"><textarea name="text" rows="10"></textarea></li>
			<li class="button">
			<input name="Submit input" type="submit" value="Submit" /></li>
		</ul>
	
		</fieldset></form>
</div>
<div id="footer">
	<a href="http://iwebkit.net">Powered by iWebKit</a></div>

</body>

</html>
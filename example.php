<!-- 
This is an example of a page that uses spot. After adding the connect details you need to do exactly as the comments say in order to setup your site.
-->

<!-- Start copying -->
<?php require('Spot/start.php'); // simply copy and paste this into your page
echo Create_User('user','pass'); // change this to the username / pass you want and refresh the page then remove this
?>
<!-- end copy -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>title</title>
<!-- Start copying -->
<script src="Spot/jquery.js" type="text/javascript"></script>
<script src="Spot/editing.js" type="text/javascript"></script>
<!-- End copying -->
</head> 

<body>

<div id="topbar">
	<div id="rightbutton">
		<a href="Spot/admin">Admin</a></div> <!-- Add a link to /Spot/Admin to login on desktop or mobile. -->
	<div id="title">
				<?php echo Spot('MainHeader'); // add this anywhere and change the text inside to something unique ?>
		</div>
</div>
<div id="content">

	<?php echo Spot('graytitle'); // just another editable area ?> </span>
	</div>
	</body>

</html>

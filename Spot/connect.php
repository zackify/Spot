<?php
   session_start();
$db_host		= '';
	$db_user		= '';
	$db_pass		= '';
	$db_database	= '';
	
	
	$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
	
	mysql_select_db($db_database,$link);

	
?>
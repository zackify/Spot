<?php
require('connect.php');
$title = mysql_real_escape_string($_POST['title']);
$text =  mysql_real_escape_string($_POST['text']);
mysql_query("UPDATE content SET text='$text' WHERE title='$title'") or die(mysql_error());
echo $text;
?>
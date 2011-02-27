<?php
require('connect.php');
$title = $_POST['title'];
$text =  $_POST['text'];
mysql_query("UPDATE content SET text='$text' WHERE title='$title'") or die(mysql_error());
echo $text;
?>
<?php
require('connect.php');
$title = $_POST['title'];
$result = mysql_query("SELECT * FROM content WHERE title='$title'") or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
if($row['text'] == ""){
echo " ";
}
echo $row['text'];
if(mysq_num_rows($result) == 0){
echo 'an error occurred.';
}
?>
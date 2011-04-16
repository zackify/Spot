<?php
Session_start();
require('connect.php');
function Spot($title){
$result = mysql_query("SELECT text,title FROM content WHERE title='$title'") or die(mysql_error());
if(mysql_num_rows($result) != 0){
$row = mysql_fetch_array($result);
if(isset($_SESSION['user']) && !isset($_SESSION['mobile'])){
$text = "<div class=\"edit\" title=\"".$row['title']."\" contenteditable>". stripslashes($row['text']) ."</div>";
return $text;
}
else{
return $row['text'];
}
}
else{
mysql_query("INSERT INTO content (title,text) VALUES ('$title','$title')") or die(mysql_query());
}
}
function box_items(){
	$result = mysql_query("SELECT title,id FROM content ORDER BY id DESC") or die(mysql_error());
	while($row = mysql_fetch_array($result)){
			$title = $row['title'];
			$id = $row['id'];
			$items .= "<option value=\"$id\">$title</option>";
}
			return $items;

}
function Create_User($user,$pass){
	$result = mysql_query("SELECT * FROM users WHERE user='$user'") or die(mysql_error());
	if(mysql_num_rows($result) ==0){
		$pass = hash('sha256',$pass);
		mysql_query("INSERT INTO users (user,pass) VALUES ('$user','$pass')") or die(mysql_error());
	}
	else{
		echo "Remove the create user snippet";
		
	}
	
}
$(document).ready(function(){
$('.edit').blur(function(){
var text = $(this).html();
var title = $(this).attr('title');
$.ajax({
   type: "POST",
   url: "Spot/save.php",
   data: "text="+text+"&title="+title,
   success: function(msg){
     $(this).html(msg);
   }
 });
 });
 
 
  
         });
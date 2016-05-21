<?php
$news_id=$_REQUEST['news_id'];
$comment=$_REQUEST['text'];
$login=$_REQUEST['login'];
include'connection1.php';
$query="INSERT INTO comments VALUES(null,'$news_id','$comment','$login')";
if($con->query($query)){
    header("Location:Main.php");
}
?>
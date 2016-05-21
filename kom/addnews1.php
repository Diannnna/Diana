<?php
$header=$_POST['header'];
$text=$_POST['text'];
include 'connection1.php';
$query="INSERT INTO news VALUES(null,'$header','$text')";
if($con->query($query)){
    header("Location:Main.php");
}
?>
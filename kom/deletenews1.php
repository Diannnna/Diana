<?php

$id=$_REQUEST["id"];
include'connection1.php';
$query="DELETE FROM news WHERE `id`=$id";
if($con->query($query)){
    header("Location:Main.php");
}

?>
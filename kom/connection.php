<?php 
	$con = new mysqli('localhost','root','','users');
	if(!$con){
		die($con->error);
	}
?>
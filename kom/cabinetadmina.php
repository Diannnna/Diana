 <html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
 <body background="Flat-Ocean.jpeg" >
 	 <div class="col-md-offset-3 col-md-2 col-xs-offset-2 col-xs-2">
   <a href="free.php"><img src="2-Hot-Home-icon.png" style="width:80px;height:50px;"></a>
</div>
 <table>
 <?php

include ('connection.php');

if (isset($_POST['delete'])){
	$delete="DELETE FROM users WHERE id='$_POST[hidden]'";
	$con->query($delete);
		header('location: cabinetadmina.php');
}

$sql="SELECT * FROM users";
$result=$con->query($sql);
if ($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo "<form action=cabinetadmina.php method=post>";
		echo "<tr>";
		echo "<td>".$row['id']."</td>";

		echo "<br>";
		echo "<td>".$row['surname']."</td>";
		echo "<br>";
		echo "<td>".$row['name']."</td>";
		echo "<br>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>"."<input type=hidden name=hidden value=". $row['id']."</td>";
		echo "<td>"."<input type=submit name=delete value=Delete id=button"."</td>";
	}
}
$con->close();
?>
</table>
</body>



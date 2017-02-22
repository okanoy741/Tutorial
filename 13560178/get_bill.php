<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ict13560178";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Error Connect to Database");

$sql = "INSERT INTO `pay` (`payID`, `name`, `tel`, `address`, `pay`) 
		VALUES ('','".$_POST["name"]."','".$_POST["tel"]."'
		,'".$_POST["address"]."','".$_POST["pay"]."')";

	

	$query = mysqli_query($conn,$sql);

	if($query) {
		header("location:confirm.html");
	}

	mysqli_close($conn);
?>
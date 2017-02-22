<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ict13560178";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Error Connect to Database");

$sql = "INSERT INTO `order` (`orderID`, `chicken`, `sweet`, `red`, `black`) 
		VALUES ('','".$_POST["chicken"]."','".$_POST["sweet"]."'
		,'".$_POST["red"]."','".$_POST["black"]."')";


	$query = mysqli_query($conn,$sql);

	if($query) {
		header("location:pay.html");
	}

	mysqli_close($conn);
?>
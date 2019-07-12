<?php 

	include("connection.php");

	$LEmail = $_POST['Email'];
	$LPassword = $_POST['Password'];

	$query = "SELECT Email , Password FROM `register` where (`Email` = '$LEmail' AND `Password` = '$LPassword')";
	$result = $conn->query($query);

	if ($result->num_rows > 0) 
	{
		echo "Logged In";
	}
	else
	{
		echo "Error";
	}
?>
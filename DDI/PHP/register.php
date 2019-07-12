<?php 

	include("connection.php");

	$FName = $_POST["FName"];
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$Country = $_POST["Country"];

	$query = "INSERT INTO `register` (`ID`, `FullName`, `Email`, `Password`, `Country`) VALUES (NULL, '$FName', '$Email', '$Password', '$Country')";

	if($conn->query($query) == TRUE)
	{
		echo "Data Inserted";
	}
	else {
		echo "Error: ".$conn->error;
	}
	//header('location: ../HTML/login.html')

 ?>
<?php 

	include("connection.php");

	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$Msg = $_POST["Msg"];


	$query = "INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`) VALUES (NULL, '$Name', '$Email', '$Msg')";

	if($conn->query($query) == TRUE)
	{
		echo "Data Inserted";
	}
	else 
	{
		echo "Error: " . $conn->error;
	}

 ?>
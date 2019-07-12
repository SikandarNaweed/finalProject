<?php 

	include("connection.php");

	$FPEmail = $_POST['FPemail'];
	$FPPassword = $_POST['FPpassword'];
	$CPassword = $_POST['Cpassword'];

	if($FPPassword==$CPassword)
	{
		$query = "UPDATE `register` SET Password = '$FPPassword' WHERE Email = '$FPEmail'";
		$result = $conn->query($query);

		if ($result->num_rows > 0)
		{
			echo "Logged In";
		}
		else
		{
			echo "Error";
		}

		if($conn->query($query) == TRUE)
		{
			echo "Data Inserted";
		}
		else 
		{
			echo "Error";
		}
	}
	
	else
	{
		echo "Password Not Match";
	}
?>
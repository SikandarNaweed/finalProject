<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Drug - Drug Interaction</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../CSS/general.css">
		<link rel="stylesheet" type="text/css" href="../CSS/list.css">
	</head>
	<body>
		<div class="wrapper">
			<!-- Nav Bar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand "href="../HTML/list.html">Drug - Drug Interaction</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="../HTML/home.html">Home</a></li>
						<li><a href="../HTML/about.html">About</a></li>
						<li><a href="../HTML/contact.html">Contact</a></li>
						<li class="active"><a href="../HTML/list.html">List</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../index.html"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
					</ul>
				</div>
			</nav>

			<?php 

				$m1= $_POST['Medicine1'];
				$m2= $_POST['Medicine2'];

				echo"<section class='container'>
				<table>
				<tr>
					<th>
						ID
					</th>

					<th>
						NAME
					</th>

					<th>
						STATE
					</th>
					
					<th>
						DESCRIPTION
					</th>
				</tr>

				";
				
				include("../PHP/connection.php");
				$query = "SELECT * FROM `drug-interaction`  where Name= '$m1' OR Name= '$m2' ";
				$result = $conn->query($query);

				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc())
					{

						echo "<tr>";
       					echo "<th> " . $row["ID"]. " </th> <th> " . $row["Name"]. "</th> <th> " . $row["State"]. "    </th> <th>  ". $row["Description"]. "</th> <tr> ";
    				}
				}
				else
				{
					echo"<h1>  Invalid Input NO drug found.</h1>";
				}
  				echo"</table>
				</section>";	
			?>
			<div class="push"></div>
		</div>

		<!-- Footer -->
		<Footer class="container-fluid text-center myfooter">
			<div class="row">
				<div class="col-md-6">
					<h5 class="text-uppercase">Drug - Drug Interaction</h5>
				</div>
			</div>
		</Footer>

		<!-- Copyright -->
		<div class="footer-copyright text-center">
			<p> © 2018 Copyright:.<br> All rights reserved. </p>
		</div>

		

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
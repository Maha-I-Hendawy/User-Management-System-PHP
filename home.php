<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Home Page</title>
</head>
<body>
	<?php require 'includes/_nav.php' ?>
	<div class="container">

		
		   <?php 

                session_start();

			if(isset($_SESSION["username"]) && isset($_SESSION["user_id"])){

				$user = $_SESSION['username'];

				echo "<div class='jumbotron text-center'>";

				echo " <h1>". "Home Page" . "</h1>";

				echo "</div>";
		  


				

			}

			else {

				echo "<div class='jumbotron text-center'>";

				echo " <h1>". "Home Page" . "</h1>";

				echo "</div>";

				echo "<a href='register.php' class='btn btn-primary'>" . "Sign Up" . "</a>";


		        echo "<a href='login.php' class='btn btn-info'>" . "Login". "</a>";

		        echo "</div>";
		  

				
			}



		   ?>
		   
	
		
	</div>

</body>
</html>
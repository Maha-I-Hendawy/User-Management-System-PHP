<?php 

require 'settings.php';

session_start();

			if(isset($_SESSION["username"]) && isset($_SESSION["user_id"])){

				$user = $_SESSION['username'];
				$user_id = $_SESSION['user_id']

				$url_user = $_GET['user'];

				
  		
		        $sql = "DELETE FROM users WHERE user_id = ?";
						
					$stmt = $conn->prepare($sql);

					$stmt->execute([$url_user]);

						$conn = null;
		  		header('Location: dashboard.php');
		  	}
		  	else {

		  		header("Location: login.php");
		  	}





?>
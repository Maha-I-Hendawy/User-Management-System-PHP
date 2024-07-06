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
	<title>Dashboard Page</title>
</head>
<body>
	<?php require 'includes/_nav.php' ?>
	<div class="container">



		<?php 

		    require 'settings.php';

			session_start();

			if(isset($_SESSION["username"]) && isset($_SESSION["user_id"])){

				$user = $_SESSION['username'];

				echo '<h2 class="text-center">Hello, ' . $user . "</h2>";


			}

			else {

				header("Location: login.php");
			}








          ?>

		<div class="jumbotron text-center">
		   <h1>Dashboard</h1>	
		</div>
		<a href="logout.php" class="btn btn-primary">Logout</a>
		<a href="adduser.php" class="btn btn-info">Add User</a>
		<br>
		<br>
		<br>
	</div>
		
	</div>
	<?php 

	  $sql = 'SELECT username, first_name, last_name, email FROM users';

	  	$stmt = $conn->prepare($sql);
	  	$stmt->execute();


	  	while ($row = $stmt->fetch()) {
            
            echo "<div class='container'>";
	  		echo '<table class="table">';
			   echo '<thead>';
			     echo '<tr>';
			        echo '<th>' . "Username" . '</th>';
			        echo '<th>' . 'Firstname' . '</th>';
			        echo '<th>' . 'Lastname' . '</th>';
			        echo '<th>' . 'Email' . '</th>';
			       echo '</tr>';
			    echo '</thead>';
			    echo '<tbody>';
			    echo  '<tr>';
			    echo '<td>' . $row["username"] . '</td>';
			         echo '<td>' . $row["first_name"] . '</td>';
			        echo '<td>' . $row["last_name"] . '</td>';
			        echo '<td>' . $row["email"] . '</td>';
			        echo '<td>' . '<a href="updateuser.php" class="btn btn-success">' . 'Update' . '</a>' . " " . '<a href="deleteuser.php" class="btn btn-danger">'. 'Delete' . '</a>'.'</td>';
			      echo '</tr>';
			    echo '</tbody>';
			  echo '</table>';
         	echo "</div>";
		   
		   
		     }



		$conn = null;
  		




	?>

</body>
</html>



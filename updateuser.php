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
	<title>Update User</title>
</head>
<body>
	<div class="container">
		<?php require 'includes/_nav.php' ?>
	<div class="container">

	<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="form-group">
    <label for="confirm_pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="confirm_pwd" name="confirm_password">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>

	</div>

</body>
</html>

<?php


	require 'settings.php';

  session_start();

			if(isset($_SESSION["username"]) && isset($_SESSION["user_id"])){

				$user = $_SESSION['username'];
				$user_id = $_SESSION['user_id'];

				if($_SERVER['REQUEST_METHOD'] == 'POST'){

					$url_username = $_GET["user"];

					$username = $_POST['username'];
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
  	                $email = $_POST['email'];
				  	$password = $_POST['password'];
				  	$confirm_password = $_POST['confirm_password'];

				  	 if($password == $confirm_password){
  		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
  		
  		
      $sql = "UPDATE users set username = ?, first_name = ?, last_name = ?, email = ?, password = ? WHERE username = ?)";
				
			$stmt = $conn->prepare($sql);

			$stmt->execute([$username, $fname, $lname, $email, $hashed_password, $url_username]);

				$conn = null;
  		header('Location: dashboard.php');
  	}
  	else {

  		echo "Passwords don't match";
  	}



				}

			}

			else {

				header("Location: login.php");
			}














?>
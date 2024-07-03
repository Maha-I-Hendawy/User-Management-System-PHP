
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
	<title>Registration Page</title>
</head>
<body>
	<?php require 'includes/_nav.php' ?>
	<div class="container">
		<h1>Registration Page</h1>

	<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
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
 
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
	</div>
	
</body>
</html>

<?php 

   require 'settings.php';



	if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$confirm_password = $_POST['confirm_password'];



  	if($password == $confirm_password){
  		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
  		
  		
        $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
				$conn->prepare($sql)->execute([$username, $email, $hashed_password]);

				$conn = null;
  		header('Location: login.php');
  	}
  	else {

  		echo "Passwords don't match";
  	}



  }

?>
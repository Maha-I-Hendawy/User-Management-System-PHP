<?php require 'settings.php' ?>
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
	<title>Login Page</title>
</head>
<body>
	<?php require 'includes/_nav.php' ?>
	<div class="container">
		<h1>Login Page</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
	</div>

</body>
</html>

<?php 

   require 'settings.php';


   session_start();

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

   	   $username = $_POST["username"];

   	   $password = $_POST['password'];

   	   $sql = "SELECT * FROM users WHERE username= :username";

  	$stmt = $conn->prepare($sql);

		$stmt->bindValue(':username', $username); 
    $stmt->execute();

    if($stmt->rowCount() > 0){

      $check = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $row_id = $check[0]["user_id"];
    
      $row_username = $check[0]['username'];
      $row_password = $check[0]["password"];
      //echo $row_username;
      //echo $row_password;

      if(password_verify($password, $row_password)){

            $_SESSION['user_id'] = $row_id;

           $_SESSION['username'] = $row_username;
           header("Location: home.php");

            }
      else {

        echo "invalid password";
      }

  }

   }



?>
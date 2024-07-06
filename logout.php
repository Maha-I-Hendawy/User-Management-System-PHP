<?php 

session_start();

if(isset($_SESSION["username"]) && isset($_SESSION["user_id"])){

	session_unset();
	session_destroy();

	header("Location: login.php");
}








?>
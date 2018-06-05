<?php 

session_start();

if(isset($_COOKIE['email'])) 
{
	header('Location: welcome.php'); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	include "conn.php";

	// Getting values from POST
	$email = $_POST['email'];
	$password = $_POST['password'];


	// SQL query to search for user data
	
	$query = "SELECT * FROM `user` WHERE email='$email'and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['first_name'] = $first_name;
		header("Location: welcome.php");
	} 
	else {
		$errorMessage = '<p>Incorrect username or password.</p>';
		require_once('login.php');
	}
}

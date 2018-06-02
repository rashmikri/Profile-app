<?php

$errors = array();

if(empty($_POST["first_name"]) && !preg_match("/^[a-zA-Z ]*$/", test_input($_POST["first_name"]))) {
	$errors["first_name"] = "Name is required and Only letters and white space allowed";
}

if(empty($_POST["last_name"]) && !preg_match("/^[a-zA-Z ]*$/", test_input($_POST["last_name"]))) {
	$errors["last_name"] = "Name is required and Only letters and white space allowed";
}

if (empty($_POST["email"]) && !preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', test_input($_POST["email"]))) {
	$errors["email"] = "Email is required or Invalid email format";
}

	if (empty($_POST["street"])) {
		$errors["street"] = "Street is required";
	}

if (empty($_POST["city"])) {
	$errors["city"] = "city is required";
}

if (empty($_POST["country"])) {
	$errors["country"] = "country is required";
}

if (empty($_POST["date_of_birth"])) {     
	$errors["dob"] = "dob is required";
}

if(empty($_POST["mob_no"]) && !preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{6})$/', test_input($_POST["mob_no"]))) {
	$errors["mobile_number"] = "mobile number required or Please enter a valid phone no";
}

if (empty($_POST["pin"]) && !preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{6})$/', test_input($_POST["pin"]))) {     
	$errors["pin"] = "pin is required or Please enter a valid pin";
}

if(empty($_POST["password"]) && !preg_match('~^[a-z0-9]*[0-9][a-z0-9]*$~i', test_input($_POST["password"]))) {
	$errors["password"] = "Password is required";
}

if(empty($_POST["cpassword"]) && !preg_match('~^[a-z0-9]*[0-9][a-z0-9]*$~i', test_input($_POST["cpassword"]))) {
	$errors["confirm_password"] = "Password is required";
}

if ($_POST["password"] != $_POST["cpassword"]) {
		$errors["confirm_password"] = "Password Mismatch";
}

if(count($errors) === 0){
	include('insert.php');
} else {
	print_r($errors);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
  	return $data;
};

<?php
include('conn.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$mob_no = $_POST['mob_no'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$country = $_POST['country'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql="INSERT INTO user(first_name, last_name, date_of_birth, gender, mob_no, street,city ,state ,pin ,country,email, password) VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$mob_no', '$street','$city','$state','$pin','$country','$email','$password')"; 

$result = mysqli_query($con, $sql);

if ($result) {
	echo '<script>alert("Registeration done")</script>';
	echo '<p>Continue to <a href="login.php"><Button type="submit" class="btn btn-primary">Login</Button></a><p>';
} else{
	die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

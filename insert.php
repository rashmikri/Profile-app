<?php
include('conn.php');

$user_name = $_POST['user_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$optradio = $_POST['optradio'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$address = $_POST['address'];
$password = $_POST['password'];

$sql=("INSERT INTO Registration(user_name, first_name, last_name, date_of_birth, optradio, email, mob_no,address, password) VALUES ($user_name, $first_name, $last_name, $date_of_birth, $optradio, $email, $mob_no, $address, $password)"); 
$result = mysqli_query($con, $sql);
if ($result)
{
	 echo "Records inserted successfully.";

} else{
die('Error: ' . mysqli_error($con));	
}

mysqli_close($con);
?>

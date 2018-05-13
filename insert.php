<?php
include('conn.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$optradio = $_POST['optradio'];
$mob_no = $_POST['mob_no'];
$street = $_POST['street'];
$city = $_POST['city'];
$others = $_POST['others'];
$state = $_POST['state'];
$others1 = $_POST['others1'];
$pin = $_POST['pin'];
$country = $_POST['country'];
$email = $_POST['email'];
$passw = $_POST['passw'];
$cpassw = $_POST['cpassw'];
$passw = md5($passw);
$cpassw = md5($cpassw);


$sql="INSERT INTO user(first_name, last_name, date_of_birth, optradio, mob_no, street,city,others ,others1,state,pin,country,email, passw,cpassw) VALUES ('$first_name', '$last_name', '$date_of_birth', '$optradio', '$mob_no', '$street','$city','$others','$state','$others1','$pin','$country','$email','$passw', '$cpassw')"; 

$result = mysqli_query($con, $sql);

if ($result) {
	echo '<script>alert("Registeration done")</script>';
	echo '<p>Continue to <a href="login.php"><Button type="submit" class="btn btn-primary">Login</Button></a><p>';
} else{
	die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

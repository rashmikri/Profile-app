<?php 

$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, "Register");
if (!$con)
  {
 die('Could not connect: ' . mysql_error());
  }

?>
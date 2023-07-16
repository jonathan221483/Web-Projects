<?php
//refer to the php code to connect to database
	require_once 'connect.php';
	session_start();
//assigning variables
$name = $_POST['name'];
$surname = $_POST['surname'];
$phonenumber = $_POST['phone'];
$login = $_POST['login'];
$password = $_POST['password'];
$password2 = $_POST['password_2'];
if($password==$password2)
{
//implement musqli query to insert data to table 'customers'
mysqli_query($conn, "INSERT INTO `customers`(`name`,`surname`, `phone number`, `login`, `password`) VALUES ('$name','$surname','$phonenumber','$login','$password')");
$_SESSION["register"]=true;
header("Location: index.php");
}
else
{
	$_SESSION["message"]="Passwords are not similar!";
	header("Location: signup_site.php");
}


?>
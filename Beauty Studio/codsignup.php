<?php
session_start();
require_once 'connect.php';//refer to the code where we connect to DB
$_SESSION['signup']='0';
$_SESSION['signup_error']='0';
$counter=0;
unset($_SESSION['ID']);
$name=$_POST["name"];//assigning variables
$surname=$_POST["surname"];
$phonenumber=$_POST["phonenumber"];
$login=$_POST["login"];
$password=$_POST["password"];

$result=mysqli_query($connect, "SELECT * FROM accounts");//Execute 'mysqli'query
while($rez = mysqli_fetch_array($result))
{
	if($rez['password']==$password || $rez['login']==$login)
	{
	$counter++;
	}
}
if($counter==0)
{
mysqli_query($connect, "INSERT INTO `accounts`(`name`, `surname`, `phone_number`, `login`, `password`) VALUES ('$name','$surname','$phonenumber','$login','$password')");//execute mysqli query to insert data to table in DB
$_SESSION['signup']='1';
header('Location: vkladki.php');
}
else 
{
	$_SESSION['signup_error']='1';
	header('Location: signup.php');
}
echo $counter;
?>
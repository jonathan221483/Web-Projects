<?php
require_once 'connect.php';//make connection with database

$login = $_POST['login'];//create variables
$password = $_POST['password'];

mysqli_query($connect, "INSERT INTO `accounts`(`name`, `surname`, `phone_number`, `login`, `password`) VALUES ('$name','$surname','$phonenumber','$login','$password')");//make query
echo 'success';


?>
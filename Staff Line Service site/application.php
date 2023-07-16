<?php
require_once 'connection.php';//make connection

$name = $_POST['name'];//create variables
$phone = $_POST['phone'];
$company = $_POST['company'];
$type = $_POST['type'];
$preferences = $_POST['pref'];

mysqli_query($connect,"INSERT INTO `applications`(`Customer_name`, `Phone_number`, `Company_name`, `Meal_type`, `Personal_preferences`) VALUES ('$name','$phone','$company','$type','$preferences')");//make query


?>
<?php
//refer to the php code to connect to database
	require_once 'connect.php';
	session_start();
	//assigning variables
	$name = $_POST['name'];
	$cost = $_POST['cost'];
	$img = $_POST['img_upload'];
mysqli_query($conn, "INSERT INTO `products`(`product_name`, `product_cost`, `product_image`) VALUES ('$name','$cost','$img')");
header("Location: index.php");
?>
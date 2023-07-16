<?php
//connecting to the database 'onlineshop'
$conn = mysqli_connect('localhost', 'root', '', 'onlineshop');
if (!$conn) 
  die("Connection failed");
?>
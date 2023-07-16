<?php
// Create connection
$connect = mysqli_connect('localhost', 'root', '', 'testdb');
// Check connection
if (!$connect) {
  die("Connection failed");
}
?>
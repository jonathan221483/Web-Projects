<?php
$connect_to_database = mysqli_connect('localhost','root','','britannica');//connect to database "britannica"
if(!$connect_to_database)
die("Connection failed");//if connecction is failed, print "Connection failed"
?>
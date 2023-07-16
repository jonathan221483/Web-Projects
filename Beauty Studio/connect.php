<?php
$connect= mysqli_connect('localhost','root','','project');//create 'connect' variable to connect to DB and use it in queries
if(!$connect)
die("Connection failed");//output message if couldnt connect to DB
?>
<?php
//refer to the php code to connect to database
	require_once 'connect.php';
	session_start();
//assigning variables
$pass=$_POST['password'];
if($pass=='phoenixshopadmin')
{
	$_SESSION["ID"]="admin";
	header("Location: index.php");
}
?>
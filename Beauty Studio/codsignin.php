<?php
require_once 'connect.php';//refer to the code where we connect to DB
session_start();
$_SESSION['ID']='';
$_SESSION['error']='noerror';
$log=$_POST["login"]; //assigning the variables
$pass=$_POST["password"]; //assigning the variables
$find=false;

$result=mysqli_query($connect, "SELECT * FROM accounts");//Execute 'mysqli'query

if($log=='admin@beauty_std' || $pass=='administrator1!')
{
	$_SESSION['ID']="admin";
	header('Location: vkladki.php');
}
else {
while($rez = mysqli_fetch_array($result))
{
	if($rez['login']==$log && $rez['password']==$pass)
	{
	$_SESSION['ID']=$rez['ID'];
	$id=$rez['ID'];
	$_SESSION['error']='noerror';
	unset($_SESSION['error']);
	header('Location: vkladki.php');
	$find1=true;
	break;
	}
}
if(!$find1)
{
	$_SESSION['error']='error';
	header('Location: signin.php');
}
}
?>
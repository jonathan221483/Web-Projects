<?php
session_start();
unset($_SESSION['signup']);
unset($_SESSION['application']);
require_once 'connect_db.php';//make connection with database
$login = $_POST['login'];//create variables
$password = $_POST['password'];
$admin_logged=false;

$result=mysqli_query($connect, "SELECT * FROM accounts");//assign result to query to variable 'result'
$rows= mysqli_num_rows($result);//'rows' = number of rows in query
//checking 


$result2=mysqli_query($connect, "SELECT * FROM admin_accounts");//assign result of query to variable 'result'

while($admin=mysqli_fetch_array($result2))
{
	if($login==$admin['Login_admin'] && $password==$admin['Password_admin'])
	{
		$_SESSION["login"]="admin";
		$admin_logged=true;
		break;
	}
}

if(!$admin_logged)
{
while($row=mysqli_fetch_array($result))
{
	if($row['Login']==$login && $row['Password']==$password)
	{
	$_SESSION['UserID']=$row['CustomerID'];
	$_SESSION["login"]="success";//insert a data into cell ['login'] of superglobal variable SESSION
	break;
	}
	else $_SESSION["login"]="fail";
}

}
	header("Location: index.php");//go to main page

?>
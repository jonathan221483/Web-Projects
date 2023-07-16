<?php
//refer to the php code to connect to database
	require_once 'connect.php';
	session_start();
	//assigning variables
	$login = $_POST['login'];
	$password = $_POST['password'];
$result=mysqli_query($conn, "SELECT ID, login , password FROM customers WHERE login='$login' and password='$password'");//assign result to query to variable 'result'
$rows= mysqli_num_rows($result);//'rows' = number of rows in query
//checking 
if($rows>0)
{
	while ($row= mysqli_fetch_array($result)) 
	{
	if($row['login']== $login && $row['password']==$password)
		{
			$_SESSION["ID"]=$row['ID'];
		}
	}
	$_SESSION["login"]="login";
	unset($_SESSION['error']);
	header("Location: index.php");
}
	else 
		{
			$_SESSION['error']="Login or password are incorrect! Check your data please.";
			header("Location: signin_site.php");
}
?>
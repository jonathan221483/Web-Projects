<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
$login=$_POST["teacher_login"]; //assign variables
$password=$_POST["teacher_password"]; 
$selection=mysqli_query($connect_to_database, "SELECT * FROM teachers_table"); //selects all values from the table
	if($login=='Admin_Britannica' && $password=='Admin_Britannica1!')//
		{
		$_SESSION['Admin']='True'; //assign _SESSION variables
		$_SESSION['Admin_Login']='True';
		$_SESSION['ID']='';
		$_SESSION['User']='Admin';
		unset($_SESSION['Error']);
		}
		else{
			while($results = mysqli_fetch_array($selection))
			{
				if($results['Teacher_Login']==$login && $results['Teacher_Password']==$password)//if the given information match with the information from the database
				{
				$_SESSION['ID']=$results['Teacher_ID']; //assign _SESSION variables
				$_SESSION['Admin']='False';
				$_SESSION['User']='Teacher';
				$_SESSION['Login']='True';
				$_SESSION['Error']='False';
				unset($_SESSION['Error']);
				break;
				}
				else {
				$_SESSION['Error']='True'; //assign _SESSION variables
				$_SESSION['Admin']='False';
				unset($_SESSION['User']);}
			}}
header('Location: index.php'); //go to index page
?>
<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
$login=$_POST["student_login"];  //put all information from the form to variables
$password=$_POST["student_password"];
$selection=mysqli_query($connect_to_database, "SELECT * FROM students_table");//select all information from table of students
while($result = mysqli_fetch_array($selection))
{
	if($result['Student_Login']==$login && $result['Student_Password']==$password)//if the given information match with the information from the database
	{
	$_SESSION['ID']=$result['Student_ID']; //assign _SESSION variables
	$_SESSION['User']='Student';
	$_SESSION['Login']='True';
	unset($_SESSION['Error']);
	break;
	}
	else $_SESSION['Error']='False';
}
header('Location: index.php'); //go to index page
?>
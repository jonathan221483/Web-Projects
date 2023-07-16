<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
$_SESSION['Error']='False'; //assign _SESSION variables
$name=$_POST["Group_name"]; //put all information from the form to variables
$size=$_POST["Group_Size"];
$subject=$_POST["Group_Subject"];

$selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table"); //select all information from table of groups
while($results = mysqli_fetch_array($selection))
{
	if($results['Group_Name']==$name) //if the data from form is similar to the data from database
		$_SESSION['Error']='True';
}

mysqli_query($connect_to_database, "INSERT INTO `groups_table`(`Group_Name`, `Group_Size`,`Group_Subject`) VALUES ('$name','$size',$subject)"); //insert data to the database
header('Location: groups.php'); //go to groups page
?>
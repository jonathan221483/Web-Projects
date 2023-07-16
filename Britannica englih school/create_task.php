<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
$description=$_POST["Task_Description"]; //put all information from the form to variables
$url=$_POST["Task_URL"];
$id=$_SESSION['ID'];
$teachers_selection=mysqli_query($connect_to_database, "SELECT * FROM teachers_table WHERE Teacher_ID = $id");//select information from table of teachers where teacher ID is equal to the ID of current user
$select = mysqli_fetch_array($teachers_selection);
$group=$select['Group_ID'];
$groups_selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table WHERE Group_ID = $group");//select information from table of groups where group ID is equal to the group ID of teacher
$select = mysqli_fetch_array($groups_selection);
$subject=$select['Group_Subject'];
mysqli_query($connect_to_database, "INSERT INTO `tasks_table`(`Group_Subject`, `Task_Description`, `Task_URL`, `Teacher_ID`) VALUES ('$subject', '$description', '$url', '$id')"); //insert data to the database
header('Location: files.php'); //go to files page
?>
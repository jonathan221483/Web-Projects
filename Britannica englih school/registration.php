<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
$_SESSION['Error']='False';
$name=$_POST["name"]; //put all information from the form to variables
$surname=$_POST["surname"];
$login=$_POST["login"];
$password=$_POST["password"];
$is_teacher=$_POST["isTeacher"];
$group_id=$_POST["group_id"];
$error=False;
$found = False;
if($is_teacher=='Teacher')
{
  $selection=mysqli_query($connect_to_database, "SELECT * FROM teachers_table");//select all information from table of teachers
  while(!$found)//a nested loop
  {
      while($results = mysqli_fetch_array($selection))
        {
          if($results['Group_ID']==$group_id || $results['Teacher_Login']==$login) //if the data from form is similar to the data from database
            {
               $error=True;
            }
        }
      $found = True;
  }
}
else
{
  $selection=mysqli_query($connect_to_database, "SELECT * FROM students_table");//select all information from table of students
  while($results = mysqli_fetch_array($selection))
  {
    if($results['Student_Login']==$login) //if the data from form is similar to the data from database
      {$error=True;
         break;}
  }
}
if($is_teacher=='Teacher' && !$error)//if admin checked the checkbox and there is no errors
{mysqli_query($connect_to_database, "INSERT INTO `teachers_table`(`Teacher_Name`, `Teacher_Surname`, `Teacher_Login`, `Teacher_Password`, `Group_ID`) VALUES ('$name','$surname','$login','$password','$group_id')");//insert the data into teachers table
$_SESSION['Register']='True';}
else if($is_teacher != 'Teacher' && !$error)//if admin did not checked the checkbox and there is no errors
{mysqli_query($connect_to_database, "INSERT INTO `students_table`(`Student_Name`, `Student_Surname`, `Student_Login`, `Student_Password`, `Group_ID`) VALUES ('$name','$surname','$login','$password','$group_id')");//insert the data into students table
$_SESSION['Register']='True';}
else $_SESSION['Error']='True';
header('Location: index.php'); //go to index page
?>
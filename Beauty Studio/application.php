<?php
session_start();
require_once 'connect.php';//refer to the code where we connect to DB
$date=$_POST["date"];//assigning variables
$time=$_POST["time"];
$master = $_POST["master"];
$procedure=$_POST["procedure"];
$additional=$_POST["additional"];
$id=$_SESSION['ID'];
$_SESSION['application']="noerror";
$result=mysqli_query($connect, "SELECT * FROM accounts");
while($rows = mysqli_fetch_array($result))
{
 	if($id==$rows['ID'])
	  	{
	 	$name = $rows['name'];
	 	$surname = $rows['surname'];
		}
}

$result=mysqli_query($connect, "SELECT * FROM masters");
while($rows = mysqli_fetch_array($result))
{
 	if($master==$rows['master_name'])
	  	{
	 	$attendance=$rows['master_attendance']+1;
		}
}

$app_result=mysqli_query($connect, "SELECT * FROM applications");
while($rows = mysqli_fetch_array($app_result))
{
	if($date==$rows['Date'] && $master==$rows['Master'] && $time[0]==$rows['Time'][0] && $time[1]==$rows['Time'][1] && $time[3]==$rows['Time'][3] && $time[4]==$rows['Time'][4])
	{
		$_SESSION['application']="error";
		header('Location: codapplication.php');
	}
}
if($_SESSION['application']!="error")
{
mysqli_query($connect, "INSERT INTO `applications`(`Name`, `Surname`,`Date`, `Time`,`Master`, `Procedures`, `Additional information`) VALUES ('$name','$surname','$date','$time','$master','$procedure','$additional')");//execute mysqli query to insert data to table in DB
mysqli_query($connect,"UPDATE `masters` SET `master_attendance`='$attendance' WHERE `master_name`='$master'");
header('Location: vkladki.php');
}

?>
<?php
session_start();
require_once 'connect.php';//refer to the code where we connect to DB
$master=$_POST["master"];//assigning variables
$rate=$_POST["rate"];
$result=mysqli_query($connect, "SELECT * FROM masters");
while($rows = mysqli_fetch_array($result))
{
	if($rows["master_name"]==$master)
	{
		$rating=(($rows["master_rating"]*$rows["rates_number"])+$rate)/($rows["rates_number"]+1);
		$rates_number=$rows["rates_number"]+1;
	}
}
mysqli_query($connect,"UPDATE `masters` SET `rates_number`='$rates_number' , `master_rating`='$rating' WHERE `master_name`='$master'");
$_SESSION['rate']='ok';
header('Location: vkladki.php');
?>
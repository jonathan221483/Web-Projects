 <?php
session_start();
require_once 'connect_db.php';//make connection
$foodID = $_POST['meal'];
$amount = $_POST['amount'];
$result=mysqli_query($connect, "SELECT * FROM inventory");//assign result to query to variable 'result'
while($row=mysqli_fetch_array($result))
{
	if($row['MealID']==$foodID)
	{
		$number=$row['Meal_number']+$amount;
		mysqli_query($connect,"UPDATE `inventory` SET `Meal_number`='$number' WHERE `MealID`=$foodID");
		$_SESSION['application']='admin';
	}
}
header("Location: index.php");//go to main page
?>
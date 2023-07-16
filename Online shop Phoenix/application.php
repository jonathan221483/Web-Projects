<?php
//refer to the php code to connect to database
	require_once 'connect.php';
	session_start();
//assigning variables
if( isset($_SESSION['login']) ) {
	$ID = $_SESSION["ID"];
$name="";
$surname="";
$products_summarise = "";
$amount_summarise="";
$address=$_POST['address'];
$cost=0;
for($i=0;$i<=100;$i++)
{
	if(isset($_POST[$i]) && $_POST[$i]>0)
	{
		$result=mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$i'");
		while ($row= mysqli_fetch_array($result)) 
		{	
		$products_summarise .= $row['product_name'] . ',';
		$amount_summarise .= $_POST[$i] . "(" . $row['product_name'] . "),";//create the string with all chosen products and their amount
		$cost += $_POST[$i]*$row['product_cost'];	
		}
	}
}
$amount_summarise = substr_replace($amount_summarise ,"",-1);//erase the last character from the string
$products_summarise = substr_replace($products_summarise ,"",-1);

$result=mysqli_query($conn, "SELECT * FROM customers");
while ($row= mysqli_fetch_array($result)) 
	{
	if($row['ID']==$ID)
		{
			$name = $row["name"];
			$surname = $row["surname"];
		}
	}
if(isset($_SESSION["login"]) && $_SESSION["login"]=="login" && $products_summarise != NULL || $amount_summarise != NULL)
{
mysqli_query($conn, "INSERT INTO `applications`(`Name`, `Surname`, `Address`, `Products`,`Amount`,`Total_cost`) VALUES ('$name', '$surname', '$address', '$products_summarise','$amount_summarise','$cost')");
$_SESSION["getapp"]="Thank you for application! We are checking it. The total cost of you products is ". $cost." tenge!";
}
else if($cost==0)
$_SESSION["checkdata"]="Please check your data! You must choose amount of product";
}
else $_SESSION["fail"]="Please sign in your account";
header("Location: index.php");
?>
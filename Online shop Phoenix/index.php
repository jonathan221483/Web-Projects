<?php
require_once 'connect.php';
session_start();
if(!isset($_SESSION["ID"]))
$_SESSION["ID"]="0";
?>

<html>
<head>
<title>
Online shop "Phoenix"
</title>
<meta charset="utf-8">
<style type="text/css">
	body
	{
	background-color: oldlace;
	background-size: cover;
	}
	a
	{
		padding-right: 20px;
		text-decoration: none;
		color: oldlace;
	}
	.title{
		
		font-size: 200%;
		padding: 20px;
		font-family: Gill Sans Extrabold, sans-serif;
		color: #855100;
	}
	.button
	{
		padding: 10px;
		font-size: 150%;
		width: 50%;
		background-color: #dee2a3;
		font-weight: 1000;
	}
	.links{

		background-color: olive;
		font-size: 200%;
		text-align: right;
		padding: 10px;
		border-radius: 15px;

	}
	.message
	{
		font-size: 200%;
		font-weight: 600;
		color: #A0522D;
	}
	.messagebox
	{
		background-color: burlywood;
		width: 550px;
	}
	.amount
	{
		width: 50px;
		height: 50px;
		font-size: 80%;
	}
	.check
	{
		width: 50px;
		height: 50px;
	}
	th{
		background-color:olive ;
		padding: 15px;
		font-size: 200%;
		color: oldlace;
	}
	td{
		background-color: #dee2a3;
		text-align: center;
		font-size: 200%;
		font-weight: 600;
	}
</style>
</head>
<body>
<div class="links">
<?php 
if($_SESSION["ID"]=="admin")
echo '<a href="show_applications.php">Show applications</a>';
?>
<a href="signin_site.php">Sign in</a>
<a href="signup_site.php">Sign up</a>
<a href="signout.php">Sign out</a>
</div><hr>
<div class="title">
<h1 align="center">Online shop "Phoenix"</h1>
<h3 align="center">
<?php
if($_SESSION["ID"]!="admin")
{
$ID = $_SESSION["ID"];
$result=mysqli_query($conn, "SELECT * FROM customers") or die( mysqli_error($conn));;//assign result to query to variable 'result'
while ($row= mysqli_fetch_array($result)) 
	{
	if($row['ID']==$ID)
		{
			$name = $row["name"];
			$surname = $row["surname"];
		}
	}
if (isset($_SESSION["login"]) && $_SESSION["login"]=="login")
{
echo "Welcome to our website, " . $name ." ". $surname . "!";
}
else 
	echo "You can sign in if you have an account or sign up new account";
}
else echo 'Welcome administrator! ';
?>
</h3>
</div>
<hr>
<div align="center">
<?php
if($_SESSION["ID"]!="admin")
{ 	
echo '
<form method="post" action="application.php">
<div class="messagebox">
	<h2 class="message">';
			if(isset($_SESSION["fail"]))
				{
				echo $_SESSION["fail"];
				unset($_SESSION["fail"]);
				}
			if(isset($_SESSION["checkdata"]))
				{
				echo $_SESSION["checkdata"];
				unset($_SESSION["checkdata"]);
				}	
			if(isset($_SESSION["getapp"]))
				{
				echo $_SESSION["getapp"];
				unset($_SESSION["getapp"]);
				}	
		echo '
	</h2>
</div>
<table>
	<tr>
		<th>
			Product
		</th>
		<th>
			Cost(tenge)
		</th>
		<th>
			Quantity/amount
		</th>
	</tr>
	';
	$result=mysqli_query($conn, "SELECT * FROM products") or die( mysqli_error($conn));//assign result to query to variable 'result'
		while ($row= mysqli_fetch_array($result)) 
			{
				echo '<tr><td><img height="200" width="200" src="'.$row['product_image'].'" alt="'.$row['product_name'].'"></td>';
				echo '<td>'.$row['product_cost'].'</td>';
				echo '<td><input type="number" id="'.$row['product_id'].'" name="'.$row['product_id'].'" class="amount" value="0" min="0"></td></tr>';
			}
	echo'
	</table>
	<p style="font-size:20px;"><strong>Address:</strong></p>
	<input type="text" name="address" placeholder="Type your address" required><br><br>
	';}
	else 
	{
		echo'
		<form method="post" action="product_add.php">
		<div style="background-color: #dee2a3 ;width: 300px; border-radius: 15px; padding:10px;">
		<p style="font-size:20px;"><strong>Product name</strong></p>
		<input type="text" name="name" placeholder="Type name of product" required><br>
		<p style="font-size:20px;"><strong>Product cost</strong></p>
		<input type="number" name="cost" placeholder="Type cost of product" required><br>
		<p style="font-size:20px;"><strong>Product image (URL)</strong></p>
		<input type="text" name="img_upload" placeholder="Image URL" required><br><br>
		</div><br>
		';
	}
	?>
<input type="submit" name="upload" value="CONFIRM" class="button">
</form>
</div>
</body>
</html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<title>
Staff Line Service
</title>
	<style type="text/css">
		div
		{	 
		margin: auto;
		width: 80%;
		}
		body
        {
        background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
        background-size: 400% 400%;
        -webkit-animation: Gradient 15s ease infinite;
        -moz-animation: Gradient 15s ease infinite;
        animation: Gradient 15s ease infinite;
        }
        @-webkit-keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
         
        @-moz-keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
         
        @keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
	</style>
</head>
<body>
	<br><br>
<?php
session_start();
require_once 'connect_db.php';//make connection
echo '<div><table class="table table-sm table-success table-hover">
<thead>
    <tr>
      <th scope="col">OrderID</th>
      <th scope="col">Customer name</th>
      <th scope="col">Customer surname</th>
      <th scope="col">Company name</th>
      <th scope="col">Meal type</th>
      <th scope="col">Meal name</th>
      <th scope="col">Destination</th>
    </tr>
  </thead>
  <tbody>
';


$result=mysqli_query($connect, "SELECT orders.Order_ID, accounts.Customer_name, accounts.Customer_surname, companies.Company_name,inventory.Meal_type, orders.Meal_name, orders.Destination FROM orders, inventory, companies, accounts WHERE orders.CustomerID=accounts.CustomerID, accounts.CompanyID=companies.CompanyID, orders.CompanyID=company.CompanyID, orders.MealID=inventory.MealID");//assign result to query to variable 'result'
while($row=mysqli_fetch_array($result))
{
		echo'
	<tr>
      <th scope="row">'.$row['Order_ID'].'</th>
      <td>'.$row['Customer_name'].'</td>
      <td>'.$row['Customer_surname'].'</td>
      <td>'.$companyname.'</td>
      <td>'.$row['Meal type'].'</td>
      <td>'.$mealname.'</td>
      <td>'.$row['Destination'].'</td>
    </tr>
		';
}
echo '</table></div>';
?>
</body>
</html>
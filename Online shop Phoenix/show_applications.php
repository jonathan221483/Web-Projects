<?php
session_start();
require_once 'connect.php';
?>
<html>
<head>
<title>
Sign in page
</title>
<style type="text/css"> 	
   a
  {
    text-decoration: none;
    color: oldlace;
  }
   div {
    text-align: center;
    background: burlywood;  
    border-radius: 8px;  
   }
   body
  {
  background-size: cover;
  background-color: oldlace; 
  }
  .links{
    background-color: olive;
    font-size: 200%;
    text-align: right;
    position: relative;
    top: 5px;
    padding: 10px;
  }
  .apps 
  {
  	padding: 10px;
    width: 1100px;  
     margin: auto;    
        overflow: hidden;  
    background:   #dee2a3;
    border-radius: 15px ; 
    color:olive; 
  }
  td{
  	font-size: 150%;
		font-weight: 300;
  }
  th{
  	font-size: 200%;
		font-weight: 600;
  }

</style>
<meta charset="utf-8">
</head>
<body>
<div class="links">
<a href="index.php">Back</a>
</div>
<br><br><br>
<div class="apps">
	<table border="1">
		<tr>
			<th>
				ID
			</th>
			<th>
				Name
			</th>
			<th>
				Surame
			</th>
			<th>
				Address
			</th>
			<th>
				Products
			</th>
			<th>
				Amount
			</th>
			<th>
				Total_cost
			</th>
		</tr>
	<?php
//refer to the php code to connect to database
	
$result=mysqli_query($conn, "SELECT * FROM applications");
while ($rows = mysqli_fetch_row($result)) 
{
	echo'<tr><td>'.$rows[0].'</td>';
	echo'<td>'.$rows[1].'</td>';
	echo'<td>'.$rows[2].'</td>';
	echo'<td>'.$rows[3].'</td>';
	echo'<td>'.$rows[4].'</td>';
	echo'<td>'.$rows[5].'</td>';
	echo'<td>'.$rows[6].'</td></tr>';
}
?>
	</table>
</div>
</body>
</html>

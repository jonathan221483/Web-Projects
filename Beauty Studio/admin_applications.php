<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<title>
Beauty studio
</title>
	<style type="text/css">
		body{
			background-image: linear-gradient(to right, #ff66cc,#ffccff, #ff66cc);
		}
		.applications{
			padding: 70px;
		}
		.back{
	font-size: 100%;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	outline: none; 
	padding: 40px;
}
	</style>
</head>
<body>
	<div class="back">
	<a class="btn btn btn-dark btn-lg" href="vkladki.php" role="button" aria-disabled="true">BACK</a>
</div>
<?php
require_once 'connect.php';//refer to the code where we connect to DB
$applications=mysqli_query($connect, "SELECT * FROM applications");//Execute 'mysqli'query
echo '<div class="applications"><table class="table table-sm table-success table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Master</th>
      <th scope="col">Procedures</th>
      <th scope="col">Additional information</th>
    </tr>
  </thead>
  <tbody>
';
while($rows = mysqli_fetch_row($applications))
{
	echo'<tr><th scope="row">'.$rows[0].'</th>';
	for($i=1;$i<=7;$i++)
	echo '<td>'.$rows[$i].'</td>';
	echo '</tr>';
}
echo '</tbody></table></div>';
?>
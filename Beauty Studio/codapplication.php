<?php
session_start();
require_once 'connect.php';
if(!isset($_SESSION['application']))
$_SESSION['application']='1';
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
.forma{
	text-align: center;
	background-color: pink;
	border: solid 1px black; 
	width: 210px;
	margin: auto;  
}
body{
	background-image: url("bg.jpg");
}
textarea{
	width: 180px;
	height: 100px;
	resize: vertical;
}
.back
{
	padding-top: 10px;
	padding-left: 10px;
}
.button1{
	font-size: 100%;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	outline: none; 	
	width: 180px;
	height: 30px;
	background-color: #FA8072
}
input + span {
  padding-right: 30px;
}

input:invalid+span:after {
  position: absolute;
  content: '✖';
  padding-left: 5px;
}

input:valid+span:after {
  position: absolute;
  content: '✔';
  padding-left: 5px;
}
</style>
</head>
<body>
	<div class="back">
	<a class="btn btn btn-dark btn-lg" href="vkladki.php" role="button" aria-disabled="true">BACK</a>
</div>

<?php  
        if(isset($_SESSION['application']) && $_SESSION['application']=='error')
        {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 200px; margin-left: 100px; margin-top: 10px;">
        <strong>This master is busy in this time.</strong> Please choose another master or time.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
                ';
        }
  ?>

<div class="forma">
<form action="application.php" method="POST">
<p>Date</p><input type = "date" name = "date" required>
<p>Time<br>(working hours 12:00-18:00)</p><input type = "time" name = "time" min="12:00" max="18:00" step="1800" required>
<span class="validity"></span>
<p>Master</p>
<select name="master" required>
  <option selected disabled>Choose master</option>
    <?php
              $result=mysqli_query($connect, "SELECT * FROM masters");
                while($rows = mysqli_fetch_array($result))
                {
                  echo '<option value="' . $rows["master_name"] . '">' . $rows["master_name"] . '</option>';
                }
              ?>
   </select>

<p>Procedure</p>
<select name="procedure" required>
    <option selected disabled>Choose procedure</option>
    <option value="Manicure">Manicure(gel,polish)</option>
    <option value="Pedicure">Pedicure(gel polish)</option>
    <option value="Haircut">Haircut</option>
    <option value="Hair dye">Hair dye</option>
    <option value="Eyebrow lamination">Eyebrow lamination</option>
    <option value="Eyelash lamination">Eyelash lamination</option>
    <option value="Eyelash extension">Eyelash extension</option>
   </select>
<p>Additional information(optional)</p>
<p><textarea rows="5" cols="20" name="additional" maxlength="255" placeholder="Enter additional information"></textarea></p>

<input type="submit" value="Submit the application" class="button1"><br><br>
</div>
</form>
</body>
</html>
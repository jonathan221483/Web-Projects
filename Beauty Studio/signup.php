<?php
session_start();
if(!isset($_SESSION['signup_error']))
$_SESSION['signup_error']='0';
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
.sign{
	text-align: center;
	background-color: pink;
	position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    width: 200px;
}
body{
	background-image: url("bg.jpg");
}
.back
{
	padding-top: 10px;
	padding-left: 10px;
}
.button{
	font-size: 100%;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	outline: none; 
	padding: 0.2em 1.5em;
	background-color: #FA8072
}
</style>
</head>
<body>
	<div class="back">
	<a class="btn btn btn-dark btn-lg" href="vkladki.php" role="button" aria-disabled="true">BACK</a>
</div>

<?php  
        if($_SESSION['signup_error']!='0')
        {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 200px; margin-left: 100px; margin-top: 10px;">
        <strong>This login or password is already taken.</strong> Choose another login or passsword.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
                ';
        }
  ?>

<div class="sign">
<form action="codsignup.php" method="POST">
<p>Name</p><input type = "text" placeholder="Enter your name" name = "name" minlength="1" maxlength="15" required>
<p>Surname</p><input type = "text" placeholder="Enter your surname" name = "surname"  minlength="1" maxlength="15" required>
<p>Phone number</p><p><strong>Make sure that it starts with "8"</strong></p><input type = "tel" placeholder="8(***)*******" name = "phonenumber" minlength="11" maxlength="11" required>
<p>Login</p><input type = "text" placeholder="Enter login" name = "login" minlength="6" maxlength="12" required>
<p>Password</p><input type = "password" placeholder="Enter password" name = "password" minlength="6" maxlength="12" required><br><br>
<input type="submit" value="Sign up" class="button"><br><br>
</div>
</form>
</body>
</html>
<?php
session_start();
?>
<html>
<head>
<title>
Sign up page
</title>
<style type="text/css">
	p { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, monospace; 
    color: olive;
   }
   .button {
   	padding: 5px;
   	background-color: olive;
    color:oldlace;
   	font-size: 20px;
   	font-family: Verdana, Arial, Helvetica, monospace; 
   }
   .signin {
    text-align: center;
    width: 500px;  
    margin: auto;    
    overflow: hidden;  
    background:   #dee2a3;
    border-radius: 15px ; 
    color:olive; 
   }
   body
  {
  background-color: oldlace;
  background-size: cover;
  }
  a 
  {
    text-decoration: none;
    color: oldlace;
  }
  .links{
    background-color: olive;
    font-size: 200%;
    text-align: right;
    position: relative;
    top: 5px;
    padding: 10px;
  }
</style>
<meta charset="utf-8">
</head>
<body>
  <div class="links">
<a href="index.php">To main</a>
<a href="signin.php">Sign in</a>
</div><br><br><br>
<div class="signin">
<form method="post" action="signup.php">
<p>Name</p><input type="text" name="name" placeholder="Type your name" required>
<p>Surname</p><input type="text" name="surname" placeholder="Type your surname" required>
<p>Phone number</p><input type="number" name="phone" placeholder="Type your phone number" min="80000000000" max="89999999999" required>
<p>Login</p><input type="text" name="login" placeholder="Type your login" minlength="5" maxlength="20" required>
<p>Password</p><input type="password" name="password" placeholder="Type your password" minlength="5" maxlength="10" required>
<p>Repeat password</p><input type="password" name="password_2" placeholder="Repeat your password" minlength="5" maxlength="10" required></p>
<strong><p>
  <?php
if(isset($_SESSION["message"]))
{
echo $_SESSION["message"];
unset($_SESSION["message"]);
}
?>
</strong></p>
<br><br>

<input type="submit" value="Sign up" class="button">
</form>
<br>
</div>
</body>
</html>
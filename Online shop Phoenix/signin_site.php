<?php
session_start();
?>
<html>
<head>
<title>
Sign in page
</title>
<style type="text/css">
	p { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, monospace; 
    color: #000000;
   }
   .button {
   	padding: 3px;
   	background-color: olive;
   	font-size: 20px;
   	font-family: Verdana, Arial, Helvetica, monospace;
    border-radius: 5px;
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
  a
  {
    text-decoration: none;
    color: oldlace;
  }
  .login 
  {

    width: 500px;  
     margin: auto;    
        overflow: hidden;  
    background:   #dee2a3;
    border-radius: 15px ; 
    color:olive; 
  }
  #login {
   text-align: left;  
    padding-left: 8px; 
  }
  .footer {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 25px;
  text-align: right;
  }
</style>
<meta charset="utf-8">
</head>
<body>
<div class="links">
<a href="index.php">Back</a>
</div>
<br><br><br>
<div class="login">
<form method="post" action="signin.php">
  <h1>Login form</h1>
<label><b>Login </b><br></label>
<input type="text" name="login" placeholder="Type your login" required>  
<br><br>
<b>Password</b><br><input type="password" name="password" placeholder="Type your password" required><?php
if(isset($_SESSION['error']))
echo '<br>'.$_SESSION['error'];
?><br><br>
<input type="submit" value="Sign in" class="button"><br><br>
No account? <a href="signup_site.php">Sign up</a>
</form>
</div>
<div class="footer">
<a style="padding: 10px; color: black;" href="admin_mode.php">Admin mode</a>
</div>
</body>
</html>
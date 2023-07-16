<?php
session_start(); //start session to use _SESSION variables
unset($_SESSION['ID']); //reset all _SESSION variables
unset($_SESSION['Admin']);
unset($_SESSION['User']);
unset($_SESSION['Error']);
unset($_SESSION['Permission']);
header('Location: index.php'); //go to index page
?>
<?php
	session_start();
	$_SESSION['login']='logout';
	unset($_SESSION['application']);
	unset($_SESSION['signup']);
	header("Location: index.php");
?>
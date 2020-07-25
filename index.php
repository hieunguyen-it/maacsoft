<?php
	include_once("connect.php") ;
	session_start();
	define('TEMPLATE' , true);
	if (isset($_SESSION["user"]["mail"])&& isset($_SESSION["user"]["password"])) {
		include_once("admin.php") ;
	}else {
		include_once("login.php") ;
	}
	
?>
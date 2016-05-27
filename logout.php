<?php
	//make sure the player is under login status
	session_start();
	//clear the value of session name
	unset($_SESSION["username"]);
	//clear the value of session password
	unset($_SESSION["pwd"]);
	//navigate the page to index
	header("Location: index.html");
	exit();
?>
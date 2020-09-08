<?php
	$login = $_POST["name"];
	$password = $_POST["password"];
	if($login == "admin" && $password == "admin"){
	echo $login,$password;
	}else echo $login." ".$password." "."ACCESS DENIED!";

<?php
	$name = $_POST['name'];
	$password = $_POST[password];
	if($name == "admin" && $password == "admin"){
		include "security/adminPanel.php";
	}
	else include "index.php";
	
	//echo $name." ".$password;
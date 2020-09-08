<?php
	//print $_POST['name']." ".$_POST["password"];
	if($_POST['name'] == "admin" && $_POST["password"] == "admin"){
		include "php/admin.php";
	}else {
	header("Location:".$_SERVER['HTTP_REFERER']);	
	}
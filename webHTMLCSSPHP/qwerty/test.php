<?php
	$login=$_POST["login"];
	$passw=$_POST["password"];
		//echo $login." ".$passw."\n";
		if($login == "Nikita"){
			print ($login."! "." Иди на йух!");
		}
		else print ("Ну и йух с тобой!");
	

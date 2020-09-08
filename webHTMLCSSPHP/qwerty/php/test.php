<?php
	$login=$_POST["login"];
	$passw=$_POST["password"];
		//echo $login." ".$passw."\n";
		if($login == "Nikita"){
			print ($login."! "." Иди на йух!");
		}
		else print ("Ну и йух с тобой!");
		print $_POST["ConnectBD"];
	function connectDB(){
		
		try{
		$pdo = new PDO('mysql:host=localhost;dbname=mybase',"root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"'); 
				}
		catch(PDOException $e){
			print "Error connect".$e->getMessage();
			exit();
		}
		print "<h4>Connect DB OK</h4></br>";
		return $pdo;
	}		
		
	/*	$result = $pdo->query("SELECT name, password FROM users ORDER BY name");
		while($row = $result->fetchAll()) {
 
   echo "Name: [".$row['name']."password: ["." ".$row['password']." <br/>";
   }
	*/	
		
		function readDB(){
		$pdo=connectDB();
		try{
			$sql=$pdo->query("SHOW TABLES FROM mysql");
			
		}catch(PDOException $e){
			print $e->getMessage();
			exit();
		}
		foreach ($sql as $key => $value) {
    echo "<br>".$value[0];
		}
		return $pdo;
		}
		function readDBname(){
		$pdo=readDB();
		try{
			$sql=$pdo->query("SHOW DATABASES");
			
		}catch(PDOException $e){
			print $e->getMessage();
			exit();
		}
		print "<br>";
			foreach ($sql as $key => $value) {
    echo "<br>".$value[0];
		}
	echo "<br>SHOW Seccessfully\n";


		}
		readDBname();
		
<?php
function connectDB(){
	try{
		$pdo = new PDO("mysql:host=localhost;dbname = test","root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->exec("set names 'utf8'");
		
	}catch(PDOException $e){
		print "Connect with dbname $dbname is failed".$e->getMessage();
		exit();
	}
	print "Connect with database $dbname is seccessfully";
	return $pdo;
}

function showDB(){
	try{

		$pdo = connectDB();
		
		$result = $pdo -> query("SHOW DATABASES");
		print "SHOW DATABASES\n";
		/*while($row = $result -> fetch()){
			print $row[0]." \n";
		}*/

		$pdo = NULL;
	}catch(PDOException $e){
		print "<br>Reading DB is failed";
		$pdo = NULL;
		exit();
	}
	return $result;
}



function createDB($namedb){
	try{
		$pdo = connectDB();
		$pdo -> exec("CREATE DATABASE IF NOT EXISTS $namedb");
		print "Create $namedb is OK".
		$pdo = NULL;
	}catch(PDOException $e){
		print "Create $namedb is failed".$e->getMessage();
		$pdo = NULL;
	}
}



function deleteDB($namedb){
	try{
		$pdo = connectDB();
		$pdo -> exec("DROP DATABASE IF EXISTS $namedb");
		print "<br> DELETE $namedn is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> DELETE $namedb is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}



function showTables($namedb){
	try{
		$pdo = connectDB();
		$result = $pdo -> query("SHOW TABLES FROM $namedb");
		print "SHOW TABLES\n";
		/*while($row = $result -> fetch()){
			print $row[0]."\n";
		}*/
		print "<br> Read Table $namedb is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> Read Table $namedb is failed!".$e->getMessage();
		$pdo = NULL;
		exit();
	}
	return $result;
}

function createTable($namedb,$nameTable){
	try{
		$pdo = connectDB();
		$pdo -> exec("CREATE TABLE IF NOT EXISTS $namedb.$nameTable(
				testId INT NOT NULL,
				testName VARCHAR(255),
				testDescr VARCHAR(255)
			)");
		print "<br>Create Table $namedb.$nameTable is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> Create table $namedb.$nameTable is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}


function deleteTable($namedb,$nameTable){
	try{
		$pdo = connectDB();
		$pdo -> exec("DROP TABLES IF EXISTS $namedb.$nameTable");
		print "<br> DELETE TABLE $namedb.$nameTable IS OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> DELETE Table $namedb.$nameTable is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}





function showColumns($namedb,$nameTable){
	try{
		$pdo = connectDB();
		$result = $pdo -> query("SHOW COLUMNS FROM $namedb.$nameTable");
		
		/*	while($row = $result->fetch(PDO::FETCH_BOTH)){
				print $row[0]."\n";
			}*/
			$pdo =NULL;
	}catch(PDOException $e){
		print "<br> READ COLUMNS FROM mybase is FAILED".$e->getMessage();
		$pdo = NULL;
		exit();
	}
	return $result;
}


function addColumns($namedb,$nameTable){
	try{
		$pdo = connectDB();
		$pdo ->exec("ALTER TABLE $namedb.$nameTable add test_THREE2 VARCHAR(255)  after testDescr");
		print "<br> ADD COLUMN in Table $namedb.$nameTable is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> ADD COLUMN in Table $namedb.$nameTable is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}

}



function deleteColumn($namedb,$nameTable,$column){
	try{
		$pdo = connectDB();
		$pdo -> exec("ALTER TABLE $namedb.$nameTable  DROP $column");
			print "<br> delete from $namedb.$nameTable column is OK";
			$pdo = NULL;
	}catch(PDOException $e){
		print "<br> delete from $namedb.$nameTable column is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}



function selectData($namedb,$nameTable){
	try{
		$pdo = connectDB();
		$result = $pdo -> query("SELECT * FROM $namedb.$nameTable");
		while($row = $result ->fetch()){
			print "<br>".$row[0]." ".$row[1]." ".$row[2]."\n";
		}
		print "<br> SELECT $namedb.$nameTable is OK\n";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> SELECT $namedb.$nameTable is failed!\n".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}


function insertTable($firstData,$twoData,$threeData){
	try{
		$pdo = connectDB();
		$stmt = $pdo -> prepare("INSERT INTO mybase.testtwo(testId,testName,testDescr)VALUES(?,?,?)");
		 $stmt -> execute(array($firstData,$twoData,$threeData));
		print "<br> INSERT is OK";
		$pdo = NULL;

	}catch(PDOException $e){
		print "<br> INSERT is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}


function updateTable($firstData,$twoData,$threeData){
	try{
		$pdo = connectDB();
		$pdo ->exec("UPDATE mybase.testtwo SET `testId` = $firstData, `testName` = $twoData, `testDescr` = $threeData WHERE testId = 3");
		print "<br> Update is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> Update is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}



function deleteFromTable(){
	try{
		$pdo = connectDB();
		$pdo ->exec("DELETE FROM mybase.testtwo WHERE testId = 150");
		print "<br> DELETE is OK";
		$pdo = NULL;
	}catch(PDOException $e){
		print "<br> DELETE is failed".$e->getMessage();
		$pdo = NULL;
		exit();
	}
}

<?php
session_start();
print<<<_HTML_
	<form  action = "?" method = "POST"> 
		<input name = "dbname" placeholders = "name db" type = "text">
		<input name = "loginDB" type = "text" placeholders = "login">
		<input name = "passwordDB" type = "password" placeholders = "password">
		<input type = "submit" value = "GO">		
	</form>
_HTML_
;
$dbname = NULL;
$login = "";
$password = "";
 $dbname = $_POST["dbname"];
$loginDB = $_POST["loginDB"];
$passwordDB = $_POST["passwordDB"];
print $dbname." ".$loginDB." ".$passwordDB."<br>";
$namedb = "mybase";
$nameTable = "testtwo";
$column = "test_THREE2";

include "php/function.php";
createDB("mybase");
//deleteDB("mybase");

//showDB();

//createTable($namedb,$nameTable);


//deleteTable($namedb,$nameTable);

//showTables($namedb);

//addColumns($namedb,$nameTable);

//deleteColumn($namedb,$nameTable,$column);
//showColumns($namedb,$nameTable);

//insertTable(2,"3500 test","test2000");


//updateTable(3,'7000000','400');





//deleteFromTable();

//selectData();


//----------------------------------------------------------------------------------

print<<<_HTML_
<br>
<form method = "POST" action ="?" >
<select id = "db" name = "showDB"  size = "5">
_HTML_;
		$result = showDB();
		while($row = $result -> fetch()){
			$idrow = $row[0];
			print "<option value = $idrow>".$row[0].'</option>';
		}


print<<<_HTML_
<input type = "submit" value = "GO"">
</select>
</form>
<br>
_HTML_;
$namedb = $_POST["showDB"];


print<<<_HTML_
<br>
<form method = "post" action = "?">
	<select name = "showTable" size = "5">
_HTML_;
		$result = showTables($namedb);
		while($row = $result -> fetch(PDO::FETCH_BOTH)){
			print "<option value = $row[0]>".$row[0]."</option>";
}


print<<<_HTML_
	</select>
	<input type = "submit" value = "SHOW columns">
</form>
_HTML_;
if(!isset($_POST["showTables"])){
$namedb = "mybase";
$nameTables = "testtwo";
}



//$nameTables = "testtwo";

//echo $namedb,$nameTables;
echo "DB ".$namedb." Table name ".$nameTables;

		$result = showColumns($namedb,$nameTables);
print<<<_HTML_
<br>
<form method = "post" action = "?">
	<select name = "showColumn" size = "5">
_HTML_
;
//echo $namedb,$nameTables;
			while($row = $result->fetch(PDO::FETCH_BOTH)){
				print "<option value = $row[0]>".$row[0]."</option>";
			}


print<<<_HTML_
	</select>
</form>
_HTML_;

 
//	showColumns("mybase","testtwo");


print<<<_HTML_
<br>
<textarea name = "text_out" cols = '55' rows = '10'>
_HTML_;

 
//selectData($namedb,$nameTable);

print<<<_HTML_
</textarea>
<br>
_HTML_;


// ----------------------------------------------------------------------------------



//----------------------------------------------------------------------------------------
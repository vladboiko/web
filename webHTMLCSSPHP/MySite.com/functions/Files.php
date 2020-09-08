<?php
class workFile{
	private  $fileName;
	function __construct($fileName){
		$fileName = $fileName;
	}
	
function fileRead($fileName){
			$str=null;
	//$fd = fopen("../articles/$fileName","r") or die ("Do not open file");

			$str = htmlentities(file_get_contents("../articles/$fileName"));

	//fclose($fd);
			return $str.$fileName;
}
function fileWrite($fileName, $strWrite){
	$file=fopen("../articles/$fileName","w") or die("Do not open file for write");
	fwrite($file,$strWrite);
	fclose($file);
}
}

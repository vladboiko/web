<?php
include "../functions/Files.php";
include "../variables/main.php";

$fileName =$_POST["name_articles"];
$ob=new workFile($fileName);
echo '<a href = "adminPanel.php">AdminPanel</a>';

$text = trim($_POST["editArticle"]);
if($_POST['button1'] == "Save"){
	$ob->fileWrite($fileName,$text);
}

if($_POST['button1'] == "Read")
$strin =((($ob->fileRead($fileName))));

	print  "<p text-align = 'center'>".'The Page for Edit Articles of Site of MySite.com';
echo "
	<form action='?' method ='post' /> 
		<label for = 'articles'>Select articles</label>
<br>
<br>";

echo "<select  name='name_articles'>";
foreach($articles as $value){ echo "<option   value = $value>";
if($_POST['name_articles'] == $value) echo "<option selected value = $value>";
			else echo "<option  value = $value>";
echo $value;
echo"</option>";
}
echo "<br><br><br><p>";
$html_select=<<<HTML
		<br>
		$fileName;
		<br>
		<textarea id='edit_article'   name = 'editArticle' rows = '30' cols = '210'>$strin</textarea>
<br>
<input type = 'submit' name = 'button1' value = 'Read'>
<input type = 'submit' name = 'button1' value = 'Save'>
	</form>
HTML;
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

echo "<br>"; 
echo "<br>";
echo html_entity_decode($html_select, ENT_NOQUOTES, "iso-8859-1");
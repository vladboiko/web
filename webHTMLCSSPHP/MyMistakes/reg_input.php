<?php
print <<<_HTML_
<form name = "reg" action = "admin_panel.php" method = "post">
	<input name = "user" type = "text">
	<input name="password" type = "text">
	<input value="GO" type = "submit">
</form>
_HTML_
;
if($_POST['name'] == "admin" && $_POST['password'] == "admin"){
		echo $_POST["name"]." ".$_POST["password"];
}
?>
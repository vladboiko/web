<?php
include "function.php";


		$result = showColumns("mybase","testtwo");//$namedb,$nameTables);
print<<<_HTML_
<br>
<form method = "post" action = "?">
	<select name = "showColumn" size = "5">
_HTML_
;
			while($row = $result->fetch()){
				print "<option value = $row[0]>".$row[0]."</option>";
			}


print<<<_HTML_
	</select>
</form>
_HTML_;


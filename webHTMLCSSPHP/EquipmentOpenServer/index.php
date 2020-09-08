<?php
print<<<_HTML_
<!DOCTYPE>
<html>
	<head>
		<title>Index</title>
	<link rel = "stylesheet"  href = "/styles/style.css" type = "text/css"> 
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	</head>
<body>
_HTML_;
include "tpl/header.tpl";

include "tpl/menu.tpl";
print<<<_HTML_
 <content>
_HTML_;
 
include "tpl/aside_left.tpl";
include "tpl/content_center.tpl";
include "tpl/aside_right.tpl";
print "</content>";
print "<div class ='clear'></div>";

include "tpl/bottom_footer.tpl";
print<<<_HTML_
 </body>
 </html>
_HTML_;
 
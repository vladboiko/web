<?php
	$flag = 4;
	include "tpl/doctype.tpl";
?>
<body>
<div id = "content">
	<header class = "gradient">HEADER </header>
	
	<?php include "tpl/nav.tpl";?>
	<aside>
			<?php 
			include "tpl/menu_left.tpl";
			?>
	</aside>
	
	<section>SECTION
			<div id = "prog_1">
					SITE KERAMIK.by
			</div>
			<div id = "prog_2">
					Application DataBases Record, Contacts and etc.
			</div>
			<div id = "prog_3">
					SITE MySite
			</div>
			<div id = "prog_4">
					Application PARSER, SEARCHING JOB and etc.
			</div>
			<div id = "prog_5">
					Application and SITE 
			</div>
			
	
	</section>
	
	<div id = "aside_right">ASIDE RIGHT</div>
	</div>
	<div class = "clear"></div>
	
	<?php include "tpl/footer.tpl";?>

</body>
</html>
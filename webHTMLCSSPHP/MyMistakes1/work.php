<?php
	$flag = 3;
	include "tpl/doctype.tpl";
?>
<body>
<div id = "content">
	<header class = "gradient">HEADER </header>
	
	<?php include "tpl/nav.tpl";?>
	<div class = "clear"></div>
	<aside>
			<?php 
			include "tpl/menu_left.tpl";
			?>
	</aside>
	
	<section>SECTION
			<div id = "prog_1">
					KBA
			</div>
			<div id = "prog_2">
					BOBST
			</div>
			<div id = "prog_3">
					PERFECTA
			</div>
			<div id = "prog_4">
					KAMPF
			</div>
			<div id = "prog_5">
					AGFA
			</div>
			
	
	</section>
	
	<div id = "aside_right"><?php include "tpl/aside_right.tpl";?></div>
	</div>
	<div class = "clear"></div>
	
	<?php include "tpl/footer.tpl";?>

</body>
</html>
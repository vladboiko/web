<?php
	$flag = 2;
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
					Prog 1
			</div>
			<div id = "prog_2">
					Prog 2
			</div>
			<div id = "prog_3">
					Prog 3
			</div>
			<div id = "prog_4">
					Prog 4
			</div>
			<div id = "prog_5">
					Prog 5
			</div>
			
	
	</section>
	
	<div id = "aside_right">ASIDE RIGHT</div>
	</div>
	<div class = "clear"></div>
	
	<?php include "tpl/footer.tpl";?>

</body>
</html>
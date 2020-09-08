<?php
	$flag = 0;
	include "tpl/doctype.tpl";
?>
<body>
<div id = "content">
	<header class = "gradient"><?php include "tpl/header.tpl";  ?></header>
	
	<?php include "tpl/nav.tpl";?>
	<div class = "clear"></div>
	<aside>
			<?php 
			include "tpl/menu_left.tpl";
			?>
	</aside>
	
	<section>SECTION
			<div id = "slider">
					SLIDER
			</div>
			
	<div id = "prod_1">prod 1</div>		
	<div id = "prod_2">prod 2</div>		
	<div id = "prod_3">prod 3</div>		
	
	</section>
	
	<div id = "aside_right"><?php include "tpl/aside_right.tpl"; ?></div>
	</div>
	<div class = "clear"></div>
	
	<?php include "tpl/footer.tpl";?>

</body>
</html>
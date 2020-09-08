<?php
/*
	Template Name: Мой шаблон страницы
*/
?>

<?php 
	$flag=1;
	include "tpl/doctype.tpl";
	?>
<body>
<div id = "content">
	<header class = "gradient">HEADER </header>
	<?php include "tpl/nav.tpl";?>
	<aside><?php 
			include "tpl/menu_left.tpl";
			?>
			</aside>
	
	<section>
		<div id = "product_1">Product 1 </div>
		<div id = "product_2">Product 2</div>
		<div id = "product_3">Product 3</div>
		<div class ="clear"></div>
		<div id = "product_4">Product 4</div>
		<div id = "product_5">Product 5</div>
		<div id = "product_6">Product 6</div>
		<div id = "product_7">Product 7</div>
		<div id = "product_8">Product 8</div>
		<div id = "product_9">Product 9</div>
	
	</section>
	
	
	</div>
	<div class = "clear"></div>
	
	<?php include "tpl/footer.tpl";?>

</body>
</html> 

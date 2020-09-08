<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		
	</head>
<body>
	<div id="header"> 
		<div id="logo">
		<h3>Кто-то!!!<br />
				Phone: 123-45-67-89 <br />
				iPhone: 987-654-321
		</h3>
		</div> 
	<div id="center"><p align ="center"  ><font color="red" size=6 > <marquee> Стулья!!! Оптом и в розницу!!! От производителя!!! </marquee></font></div>
	<div id="promo"><p align = "center"><font  color=yellow"><marquee direction="down"> Акция 3 по цене 2-х<merquee></marquee></font> </div>
	</div>
	<div id="menu"> 
		<ol class="lo" >
			<li><a href="index.php">Main</a></li>
			<li><a href="super_page.php">Chair</a></li>
			<li><a href="super_page.php">Stool</a></li>
			<li><a href="super_page.php">Table</li>
			<li><a href="super_page.php">Bed</a></li>
			<li><a href="super_page.php">About us</a></li>
			<li><a href="index.php">Back</a></li>
		</ol>
	</div>
	<div id="content_super">
		<div id="content_left">
			<div id="menu_left">
				<ul>
					<li><a href="samogon.php">Стулья</a></li>
					<li><a href="super_page.php">Табуретки</a></li>
					<li><a href="samogon.php">Столы</a></li>
					<li><a href="super_page.php">Кровати</a></li>
					<li><a href="samogon.php">Шкафы</a></li>
					<li><a href="samogon.php">Комоды</a></li>
					<li><a href="super_page.php">Бабы</a></li>
					<li><a href="samogon.php">Водка</a></li>
					<li><a href="samogon.php">Гармонь</a></li>
					<li><a href="super_page.php">Лосось</a></li>
				</ul>
			
			</div>
		
		</div>
		<div id="content_center">
				
		<?php include "articles\samogon.txt";
		
		?>
		
		
		</div>
		<div id="content_right">
				<div id="banner_1">Banner 1</div>
				<div id="banner_2">Banner 2</div>
		
		</div>
	</div>
	<div id="footer"> &copy Minsk 2018</div>
	
	<!--<form name="form1" action = "form_handler.php" method="get">
		<input name="login" value = "Input name" />
		<input name="password" type="password" />
		<input type="submit" value="GO"/>
	</form>
	-->
</body>
</html>

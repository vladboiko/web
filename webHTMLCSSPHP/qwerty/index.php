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
	<div id="promo"><p align = "center"><font  color="red"><marquee direction="right"> Акция 3 по цене 2-х<merquee></marquee></font> </div>
	</div>
	<menu> 
		<ol class="lo" >
			<li class = "current"><a href="super_page.php">Main</a></li>
			<li><a href="samogon.php">Chair</a></li>
			<li><a href="super_page.php">Stool</a></li>
			<li><a href="super_page.php">Table</li>
			<li><a href="super_page.php">Bed</a></li>
			<li><a href="super_page.php">About us</a></li>
			
		</ol>
	</menu>
	<div id="content">
		<div id="content_left">
			<div id="menu_left">
				<ul>
					<li class = "current"><a href="samogon.php" class = "current">Стулья</a></li>
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
				<div id="img1"<a href=""><img src="images\1.jpg" border="2" width="200" height= "300" vspace= "5" hspace = "5" alt=" Тута будет фото стула" /></a></div>
		<?php include "articles\article_1.txt";
		
		?>
		
		
		</div>
		<div id="content_right">
				<div id="banner_1">
						<form  action="php/test.php" method="POST"> 	
								<input type="text" name="login" placeholder="Login"> 
								<input type="password" name="password" placeholder=""> 
								<input type="submit" name="submit" value = "Submit"> 
								
						</form>
				
				</div>
				<div id="banner_2">
				<form  action="php/test.php" method="POST"> 	
								<input type="text" name="ConnectBD" placeholder="Connect BD"> 
								<input type="submit" name="Connect BD"> 
								<input type="submit" name="Create Table"> 
								
				</form></div>
	<?php include "";?>			
		
		</div>
	</div>
	<div id="clear" clear="both"></div>
	<div id="footer"> &copy Minsk 2018</div>
	
	<!--<form name="form1" action = "form_handler.php" method="get">
		<input name="login" value = "Input name" />
		<input name="password" type="password" />
		<input type="submit" value="GO"/>
	</form>
	-->
</body>
</html>

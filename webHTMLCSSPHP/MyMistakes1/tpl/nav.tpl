<nav>	
			<a href = "main.php"><span class=<?php if($flag == 0)echo "active";?>>ГЛАВНАЯ</span></a>	|
			<a href = "change.php"><span class=<?php if($flag == 1)echo "active";?>>ОБМЕН</span></a>	|
			<a href = "programming.php"><span class=<?php if($flag == 2)echo "active";?>>ПРОГРАММИРОВАНИЕ</span></a>	|
			<a href = "work.php"><span class=<?php if($flag == 3)echo "active";?>>MY WORK</span></a>	|
			<a href = "portfolio.php"><span class=<?php if($flag == 4)echo "active";?>>PORTFOLIO</span></a>	|
			<a href = "">menu5</a>	|
			<a href = "">menu6</a>	|
			<a href = "">БЛОГ</a>	|
			<a href = "aboutUs"><span class=<?php if($flag == 9)echo "active";?>>САЙТ</a>	|

			<a href = "reg_input.php">Регистрация/ Вход</a>	|
</nav>

			<span><div class = "search"><?php include "search.php";?></div></span>
	
<?php $index = $_GET['index'];include "variables/main.php"; include "tpl/head.tpl";?>
<body>
<?php include "tpl/header.tpl";?>
<div class = "content">	
			<div class ="titleMain"><p align="center"><?php echo $motto[$index];?></div>

<?php  include  "articles/$articles[$index]";	
?>
	
	
</div>

	
<?php include "tpl/aside.tpl"?>
	<div class = "clear"></div>

<?php include "tpl/footer.tpl"?>
</body>
</html>


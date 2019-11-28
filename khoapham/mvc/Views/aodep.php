<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Document</title>
	<style type="text/css">
		div{
			padding: 20px;
		}
		#header, #footer{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<div id="header"></div>
	<div id="content">
		<?php
			//require_once("./mvc/Views/pages/news.php");
			//require_once("./mvc/Views/pages/contact.php");
			require_once("./mvc/Views/pages/".$data["Page"].".php");
		?>
	</div>
	<div id="footer"></div>
	<h2>Ao dep</h2>
	<h3 style="color: <?php echo $data["Mau"]; ?>">
		<?php
			echo $data["Number"];
		?>
	</h3>
</body>
</html>
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
			require_once("./mvc/Views/pages/".$data["Page"].".php");
		?>
	</div>
</body>
</html>
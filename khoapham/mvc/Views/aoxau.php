<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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

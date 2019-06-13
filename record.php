<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<title> Main Page </title>
	<style type="text/css">
		body{
			margin-top: 200px;
			background-color: #EEFDEF;
		}
		#id{
			margin-top: 250px;
			color:yellow;
			font-size: 30px;
		}
			
	</style>
</head>
<body>

	<form name="myfrom" actoin="" method="post">
		<p id="id" align="center" style=" color:yellow;"> <b style="background-color: blue;"> Welcome To Medical Shop </b></p>	
	</form>
			
</body>
</html>

	<?php
		include('panel.php');
		session_start();
		if(is_null($_SESSION["username"])){

			header('Location:login.php');
		}
	?>
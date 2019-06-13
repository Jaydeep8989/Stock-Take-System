<html> 
<head>
	<title>  Insert Medicine </title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="input.css">
	<style type="text/css">
		body{
			margin-top: 200px;
			}
		#id{

			color:yellow;
			font-size: 30px;
		}
	</style>
</head>
	<body>	
		<center>
			<p id="id"><b> Add new Medicine </b></p>
		<form name="myform" action="" method="post">
			<table border="1" cellpadding="5" cellspacing="5">
					
					<tr>
						<td>
							Medicine name :<td> <input type="text" name="name"></td>
						</td>
					</tr>
					<tr>
						<td>
							Medicine price : <td> <input type="numeric" name="price"></td>
						</td>
					</tr>
					<tr>
						<td>
							Amount of Stock : <td> <input type="numeric" name="stock"></td>
						</td>
					</tr>
						
			</table>
				<br>

				<input style="width: 80px; height:30px; font-size: 20px; color: blue;" type="submit" name="submit" value="Insert">
			<!--	<input type="submit" name="home" value="Home">-->
		</form>	
		</center>	
	</body>
</html>

<?php

	include('connect.php');
	include('panel.php');
	

	if(isset($_POST['submit']))
	{

		$name=$_POST['name'];
		$price=$_POST['price'];
		$stock=$_POST['stock'];
		
		if($name == "" || $price == "" || $stock == "")
			include('error.php');
		else
		{
			$sql = "insert into medicine_detail(name,price,stock,totalprice) values('$name','$price','$stock','$price'*'$stock')";
			mysqli_query($db,$sql);
		}
	}
	mysqli_close($db);
?>

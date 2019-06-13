<html> 
<head>
	<title>  Delete Medicine Details</title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="input.css">
	<style type="text/css">
		
		#id{

			color:yellow;
			font-size: 30px;
		}
	</style>
</head>
	<body>	
		<center>
			<p id="id"><b> Delete Medicine Details </b></p>
		<form name="myform" action="" method="post">
			<table border="2" cellpadding="5" cellspacing="5">
					
					<tr>
						<td>
							Medicine Name : <td> <input type="text" name="name"></td>
						</td>
					</tr>
			</table>
				<br>
				<input style="width: 80px; height:30px; font-size: 20px; color: blue;" type="submit" name="submit" value="Delete">
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
		


		if($name == "")
			include('error.php');
		else
		{

			$sql = "Delete from medicine_detail where name='$name' ";
			//echo "hii";
			mysqli_query($db,$sql);
			//echo "hii";
		}

	}
	mysqli_close($db);
?>

<html>
<head>
</head>

<body>
	<center>
		<p id="id"><b> Reffered Id From record</b></p>
<?php
	
	include('connect.php');
	
	$sql = "select *from medicine_detail";
	$result = mysqli_query($db,$sql);
	echo "<table border='2' cellpadding='5' cellspacing='5'>

	<tr>
	<th>Id</th>
	<th>Medicine</th>
	<th>Price 	</th>
	<th>Stock</th>
	<th>TotalPrice</th>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		echo "<td>" . $row['stock'] . "</td>";
		echo "<td>" . $row['totalprice'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";
		
/*	if(isset($_POST['home']))
		header('Location:record.php');*/
	mysqli_close($db);
?>
</center>
</body>

</html>	
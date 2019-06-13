<!DOCTYPE html>
<html>
<head>
	<title> Bill Generate</title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="input.css">
	
	<style type="text/css">
		
		#id{	
			color: yellow;
			font-size: 30px;
		}
		
	</style>
</head>
<body>
	<center>

		<p id="id"> <b> Bill Of Madicine </b> </p>
		<form name="myform" action="" method="post">
			<table border="2" cellpadding="5" cellspacing="5">
				<tr>
				<td>
					Enter medicine name : <td><input type="text" name="name"></td>
				</td>
				</tr>
				<tr>
				<td>
					Number of Tablet : <td><input type="numeric" name="tablet"></td>
				</td>
				</tr>
				<tr>
				<td>
					Price (1 tablet) : <td><input type="numeric" name="price"></td> 
				</td>
				</tr>
				
		</table>
				<br>
				<input type="submit" name="add" value="Add Item">
				<!--<input type="submit" name="make" value="Bill Generate">-->
		</form>	
</body>
</html>


<?php
	
	include('connect.php');
	include('panel.php');
	if(isset($_POST['add']))
	{

		$name1=$_POST['name'];
		$number=$_POST['tablet'];
		$price1=$_POST['price'];
		
		if($name1== "" || $number== "" || $price1== "")
			include('error.php');
		else
		{	
			$sql="select *from medicine_detail where name='$name1'";
			echo "<br/><table>
			<tr>
			<th>Id</th>
			<th>Medicine</th>
			<th>Price 	</th>
			<th>Stock</th>
			<th>TotalPrice</th>
			</tr>";
			echo "</table>";
		}		
	}
	if(isset($_POST['make']))
		header('Location:bg.php');

	mysqli_close($db);
?>

<!--
<html>
<head>
</head>

<body>
	<center>
		
<?php
	
	/*include('connect.php');
	include('panel.php');
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
	
	mysqli_close($db);

*/
?>


</center>
</body>

</html>-->

<html> 
<head>
	<title>  Update Medicine Details </title>
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
			<p id="id"><b> Update Medicine Details </b></p>
		<form name="myform" action="" method="post">
			<table border="1" cellpadding="5" cellspacing="5">

					<tr>
						<td>
							Id : <td> <input type="text" name="id"></td>
						</td>
					</tr>			
					<tr>
						<td>
							Medicine name : <td> <input type="text" name="name"></td>
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
				<input style="width: 80px; height:30px; font-size: 20px; color: blue;" type="submit" name="submit" value="Update">
			<!--	<input type="submit" name="home" value="Home"></a>-->
		</form>	
		</center>	
	</body>
</html>


<?php

	include('connect.php');
	include('panel.php');
	

	if(isset($_POST['submit']))
	{

		$id=$_POST['id'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$stock=$_POST['stock'];
		//$total=$price*$stock;
		
		if($id=="" || $name== "" || $price== "" || $stock== "" )
			include('error.php');
		else{
			$sql = "update medicine_detail set name='$name',price='$price',stock='$stock',totalprice='$price'*'$stock' where id='$id' ";
			mysqli_query($db,$sql);
		}
	}
	/*else if(isset($_POST['home']))
		header('Location:record.php');
*/
	mysqli_close($db);
?>

<html>
<head>
</head>

<body>
	<center>
		<p id="id"><b> Medicine Details </b></p>
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
	mysqli_close($db);


?>


</center>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	
	<title> Sarch Medicine</title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="input.css">
	<style type="text/css">
		
		#id{
			font-size: 26px; 
			color:yellow;	

		}
	</style>
</head>
<body>
	<center>
	<form action="" method="POST">
		<p id="id"> <b> Search Medicine Details </b></p><br/>
		<p id="id"> <b>Search : </b><input style="height: 25px;" type="text" name="find" placeholder="Medicine name">  <input style="width: 80px; height:30px; font-size: 20px; color: blue;" type="submit" name="search" value="Search"></p>
	</form>
</center>
</body>
</html>


<?php
	include('connect.php');
	include('panel.php');



	if(isset($_POST['search']))
	{
		
		$search=$_POST['find'];
		if($search == ""){
			include('error.php');
		}
		else{

			$query="select *from medicine_detail where name='{$search}'";
			$result = mysqli_query($db,$query);
			if($result->num_rows != 1 )
			{
				include('error.php');
			}
			else {
				echo "<center> <table border='2' cellpadding='5' cellspacing='5'>

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
			}
			
			echo "</table></center>";
		}


	}

/*	if(isset($_POST['Home']))
		header('Location:record.php');
*/	mysqli_close($db);
?>
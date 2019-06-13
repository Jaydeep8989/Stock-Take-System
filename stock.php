	<html>
<head>
	<title>Stock </title>
	<link rel="stylesheet" type="text/css" href="bg.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="input.css">	
	<style>
		#id{

			color:yellow;
			font-size: 30px;
		}
		p{
			font-size: 25px;
			color:red;
		}
	</style>
</head>
<body>
	<center>
		 <form action="" method="POST">
				<p id="id"><b> All Medicine Details</b></p>
		</form>
		<?php
			include('panel.php');
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
			$total  = 0;
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td>" . $row['stock'] . "</td>";
				echo "<td>" . $row['totalprice'] . "</td>";
				echo "</tr>";
				$total += $row['totalprice'];

			}

				echo "</table>";
				echo "<span style=\"color:red\")><?php echo $total; ?> </span>"; 
 
				echo "<p><b>Total price of All Medicine : ".$total."</b></p>";
				
				mysqli_close($db);
		?>

	</center>
</body>
</html>
<?php
/*	include('connect.php');
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

			echo "<center> <table border='2' cellpadding='5' cellspacing='5'>

			<tr>
			<th>Id</th>
			<th>Medicine</th>
			<th>Price 	</th>
			<th>Stock</th>
			<th>TotalPrice</th>
			</tr>";
			
			if($result->num_rows == 1 )
			{
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
			else{
				echo "<p> <b>Record is not found!!! </b> </p>"; 
			}
			echo "</table></center>";
		}


	}

/*	if(isset($_POST['Home']))
		header('Location:record.php');
	mysqli_close($db);*/
?>
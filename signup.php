<html> 
<head>
	<title> Signup Page</title>
	<style type="text/css">
		body{

			background-image: url('medicine.jpeg');
			background-repeat: no-repeat;
			margin-top: 200px;
			background-color: #EEFDEF;
		}
		table
		{
			border-style:solid;
			border-width:2px;
			border-color:pink;
		}
	</style>
</head>
	<body>	
		<center>
			<p><b> Registration Page </b></p>
		<form name="myform" action="" method="post">
			<table border="2" cellpadding="5" cellspacing="5">
					<tr>
						<td>
							Username : <td> <input type="text" name="username" required></td>
						</td>
					</tr>
					<tr>
						<td>
							Email : <td> <input type="email" name="email" required></td>
						</td>
					</tr>
					<tr>
						<td>
							Password : <td> <input type="password" name="password" required></td>
						</td>
					</tr>
					<tr>
						<td>
							Re-Enter password : <td> <input type="password" name="password2" required></td>
						</td>
					</tr>
			</table>
				<br>
				<input type="submit" name="submit" value="Register">
		</form>	
		</center>	
	</body>
</html>
<?php

	
	include('connect.php');
	//echo "jaydeep";
	if (isset($_POST['submit']))
	{		
	
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];

		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($regex, $email)) 
		{

			if($password == $password2)
			{
				$password = md5($password);
				$sql = "INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')";
				mysqli_query($db,$sql);
				header('Location:login.php');
			}
		}
		else
				include('error.php');

	}
	
mysqli_close($db);
?>
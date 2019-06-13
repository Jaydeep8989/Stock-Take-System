<html>
<head>
    <title>Sign In</title>
     <style>
		body{	
			background-color: #EEFDEF;
		}
    	.right {
    		box-shadow: 5px 5px 10px grey;
    		border-radius:4px;
            margin-top: 150px;
    		float:center;
    		width:350px;
    		height:355px;
	   		background-color:gray;
    	}
    	.right h1 {
    		color:white;
    		margin:5px;
    		padding:25px 0px 25px 0px;
    		text-align:center;
    		font-family:big john;
    	}
	  	.right h1:hover {
    		color:yellow;
    	}
    	.signin {
    		margin:5px;
    	}
    	.signin h3 {
    		color:orange;
    		margin:5px;
    		font-size: 25px;
    	}
       	.signin input {
    		margin:5px;
    		border:2px solid white;
    		border-radius:3px;
    		width:200px;
	  		height:25px;
            text-align:center;
            color:black;
    	}
    	.signin input:hover {
    		background-color:yellow;
    		color:black;
    	}
	   	.btns {
     		background-color: gray;
    		color:white;
       	}
    	.btns:hover {
            font-size:20px; 
    		color:blue;
    		background-color:yellow;
    		display:block;
    	}
    	.btns a {
       		color:blue;
    	}
    	.btns a:hover {
    		color:blue;
    	}
	</style>
</head>
<body>
    <center>
    	<div class="right">
			<h1>Login In</h1>
				<hr>
					<form class="signin" action="" method="POST">
						<h3> Email Id :</h3> <input type="text" name="username" placeholder="Email_id">
						<h3>Password :</h3> <input type="password" name="password" placeholder="password"><br>
						<input class="btns" style="width: 80px; height: 30px;" type="submit" name="submit" value="Login In">	                            	
					</form>	
        </div>
    </center>
</body>
</html>

<?php

	session_start();
	include('connect.php');
	
	//echo "Hii";	
	if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$password=md5($password);
		$query = "select * from admin where email='{$username}' ";// password={'$password'}";
		$query1 = "select * from admin where password='{$password}' ";
		$result = $db->query($query);
		$result1 = $db->query($query1);
	
		if($result->num_rows > 0 && $result1->num_rows > 0){
			$_SESSION["username"]=$username;
			header('Location:record.php');

		}else{
			include('error.php');
		}
	}
	
	/*if (isset($_POST['signup'])){
		header('Location:signup.php');
	}*/
	mysqli_close($db);
?>


<!--<html> 
<head>
	<title> Login Page</title>
	<style type="text/css">
		body{

			
			
			margin-top: 200px;
			background-color: #EEFDEF;
		}
		#id{

			color: blue;
			font-size: 30px;
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
			<p id="id"> <b>Loign Form</b> </p>
		<form name="myform" action="" method="post">
			<table border="2" cellpadding="5" cellspacing="5">
					<tr>	
						<td>
							Email : <td> <input type="email" name="username" required></td>
						</td>
					</tr>
					<tr>
						<td>
							Password : <td> <input type="password" name="password" required></td>
						</td>
					</tr>
					
			</table>
				<br>
				<input style="width: 80px; height:30px; font-size: 20px; color: blue;" type="submit" name="submit" value="Login">
				<input type="submit" name="signup" value="signup">
		</form>	
		</center>	
	</body>
</html>-->
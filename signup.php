<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	 <link rel = "stylesheet" href = "style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 97%;
		margin: auto;

	}

	#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: #ffcc00;
		border: none;
		margin-left: 33%;
		
	}

	#box {

		background-color: #F1E8B8;
		margin: auto;
		width: 300px;
		padding: 20px;
    	min-width: 200px;
    	position: absolute;
    	transform: translate(-50%,-50%);
    	top: 40%;
    	left: 50%;
    	box-shadow: 25px 25px 30px rgba(0,0,0,0.15);
	}


	</style>
	
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black; text-align : center">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="index.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
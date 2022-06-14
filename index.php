<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			$message = "Wrong username or password!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}else
		{
			$message = "Fill in both username and password!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}                                          
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: black ; text-align: center;">Masukan Username dan Password</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
</div>
		</form>
	</div>
</body>
</html>
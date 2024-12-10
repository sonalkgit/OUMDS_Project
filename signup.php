<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$ngo_name= $_POST['ngo_name'];
		$url= $_POST['url'];
		$address=$_POST['address'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,ngo_name,url,address) values ('$user_id','$user_name','$password','$ngo_name','$url','$address')";

			mysqli_query($con, $query);

			header("Location: login.php");
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
<a href="https://github.com/Mehedi61/Login-form-Sign-up-form"></a>


	<style type="text/css">
	 body{
		 background-image: url('images/back.jpg');
		 background-size: cover;
	 }


	#text{
        font-family: FontAwesome, "Roboto", sans-serif;
		
		height: 25px;
		background: #fffcfc;
		
		border-radius: 5px;

		padding: 4px;
	
		
		width: 100%;
	
	}

	#button{
        font-family: "Titillium Web", sans-serif;
		
  font-size: 14px;
  font-weight: bold;
  letter-spacing: .1em;
  outline: 0;
  background: #a81397;
  width: 100%;
  border: 0;
border-radius:30px;
  margin: 0px 0px 8px;
  padding: 15px;
  color: #FFFFFF;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  transition: all 0.2s;
		
	}

	#button:hover{
		background: #700962;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-4px);
	}
	button:active {
  transform: translateY(2px);
  box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
}

	#box{
		
		
		width: 350px;
        position: relative;
  z-index: 1;
  background: #edadf0;
  
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  
  
	}

	</style>

	<div class="login-page" id="box" style="margin-top: 80px;">
		
		<form method="post">
		<h1 style="text-align:center; margin-top: 35px; margin-bottom: 30px;">NGO SIGNUP</h1>
		<img  src="download.jpg" style="margin-bottom: 30px; border-radius: 50%;" width="170px" alt="">

		<input id="text" name="ngo_name" type="text"   placeholder=" NGO name" style="width: 300px; border:none; padding:10px;border-radius: 8px;"><br><br>

			<input id="text" type="text" name="user_name" placeholder="&#xf007; Admins email" style="width: 300px; border:none; padding:10px;border-radius: 8px;" ><br><br>
			<input id="text" type="password" name="password"  placeholder="&#xf023;  password" style="width: 300px; border:none; padding:10px;border-radius: 8px;"><br><br>
			<input id="text" name="url" type="text"   placeholder=" Website url if any" style="width: 300px; border:none; padding:10px;border-radius: 8px;"><br><br>
			

			<textarea rows="4" name="address" type="text" id="" cols="30" rows="40" placeholder="Complete adderss" style="width: 310px; height: 100px;border-radius: 10px;"></textarea>

			<input id="button" style="width: 150px;" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
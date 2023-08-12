<?php 
session_start();

	include("connect.php");
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

			header("Location: Login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <script src="https://kit.fontawesome.com/85592954b0.js" crossorigin="anonymous"></script>
     
</head>
<body>
<div class= "container">
     <div class="FormBox">
            <a href="https://www.arellano.edu.ph/">
             <img class = "logo" src="arellano_logo.png" width="200" height="200"></a>
             <h1>Register</h1>
        <form  method="post">
            <div class="InputGroup">
                <div class="InputField">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="username" name="user_name" id="text">
                </div>
               
                <div class="InputField">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name= "password" placeholder="password" id="password">

                </div>
                <div class="BtnLogin">
                <button>   
                <input type="submit" value="Sign in">
                </button>
                </div>
               
                <br>
                <p > Already have an account? <a href="Login.php"> Login </a> </p>
            </div>          
        </form>
     </div>
</div>
<script src="register.js"></script>
</body>
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

			//read from database
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
						header("Location: IDtest.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/85592954b0.js" crossorigin="anonymous"></script>






</head>

<body>

<!-- Top arellano logo -->   
 
<div class= "container">
     <div class="FormBox">
            <a href="https://www.arellano.edu.ph/">
             <img class = "logo" src="arellano_logo.png" width="200" height="200"></a>
             <h1>Login</h1>
        <form  method="post">
            <div class="InputGroup">
                <div class="InputField">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="username" name="user_name" id="text" required>
                </div>
                
                <div class="InputField">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name= "password" placeholder="password" id="password">

                </div>
                <div class="BtnLogin">
                <button>   
                <input type="submit" value="Login">
                </button>
                </div>
               
                <br>
                <p > Don't have an account yet? <a href="register.php"> Sign up </a> </p>
            </div>          
        </form>
     </div>
</div>

</body>
</html>
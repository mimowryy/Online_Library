<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("functions.php");

$user_data = check_login($con);



 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID</title>
    <link rel="stylesheet" href="ID.css">
</head>
<body>

Hello, <?php echo $user_data['user_name']; ?>

<div class="card-generator">
  <h1>Library Card Generator</h1>
  <form id="card-form">
    <label for="name-input">Name:</label>
    <input type="text" id="name-input" name="name" required>
    <label for="age-input">Age :</label>
    <input type="number" id="age-input" name="age" required>
    <button type="submit" id="generate-button">Generate Card</button>
 
  </form>
  <div id="card-output"></div>
  <h1>Please Take a Screenshot once you pressed the Button</h1>
</div>

    <a href="main.php">
     <button>Next</button>

    </a>













  <div class="container signin">
    <p><a href="logout.php">Logout</a>.</p>
  </div>
  <script src="ID.js"></script>  
</form>

   

   
    

  
 
    
</body>
</html>
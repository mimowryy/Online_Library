<?php
 
 session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHIEFS</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!-- our local css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
 

     <!-- header starts here -->
      <header class="header">
       <a href="#" class="logo" > <i class="fas fa-shield-cat"> Timi.</i></a>
       
        <nav class="navbar">
           <a href="main.php" class=""> Home </a>
           <a href="about.php" class=""> About </a>
        
        </nav>
      <div class="icons">
       <a href="main.php"> <div id="menu-btn" class="fas fa-bars"></div> </a>
       
       <a href="Profile.php"> <div id="login-btn" class="fas fa-user"></div> </a>
        
        <p class="token">TOKEN: 0</p>
      </div>
      </header>

    
                                  <!--This is The timi page-->

 <!-- home section -->
 <section class="home" id="home">
  
  <div class="product">
    <div class="image-container">
      <img src="images/timi1.png" alt="Product 2">
    </div>
    <div class="details-container">
      <h3> Coffee Timi</h3>
      <p>Price: 5 Token</p>
      <a href="failed.php">
      <button class="buy-btn">Buy Now</button>
      </a>
    </div>
  </div>
  <div class="product">
    <div class="image-container">
      <img src="images/coolskunk.png" alt="Product 2">
    </div>
    <div class="details-container">
      <h3> Cool Skunk</h3>
      <p>Price: 5 Token</p>
      <a href="failed.php">
      <button class="buy-btn">Buy Now</button>
      </a>
    </div>
    <div class="product">
      <div class="image-container">
        <img src="images/bun.png" alt="Product 2">
      </div>
      <div class="details-container">
        <h3> Classic bunni</h3>
        <p>Price: 3 Token</p>
        <a href="failed.php">
        <button class="buy-btn">Buy Now</button>
        </a>
      </div>
 </section>

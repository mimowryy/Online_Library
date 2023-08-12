<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("functions.php");

$user_data = check_login($con);



 

?>
<head>
<style>
*{
    text-align: center;
}
img {
    width: 15%;
    height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
  }
 
  
</style>

<img src= "no-profile-picture-icon-18.jpg" alt="Library Card">
<br>

</head>
 <body>
<title>User Book Borrow Count</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
			
  width: 100%;
  height:100vh;
  background-image: linear-gradient(rgba(0,0,50,0.8),rgba(0,0,50,0.8)) ,url(juan_sumulong.jpg);
  background-position:center;
  background-size:cover;
  position:relative;
}
		
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.heading {
			font-size: 28px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
		}
		.borrow-count {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
		}
		.book-icon {
			display: block;
			margin: 0 auto;
			font-size: 72px;
			color: #999;
		}
       
	</style>


	<div class="container">
	user:  <?php echo $user_data['user_name']; ?>
<br>
id:    <?php echo $user_data['user_id']; ?>
		<h1 class="heading">Your Book Borrow Count</h1>
		<div class="borrow-count">
			<i class="fas fa-book book-icon"></i>
			<span id="borrow-count-text">0</span> books borrowed
		</div>
	</div>
	<script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
	<script>
		// Replace 0 with the actual borrow count value retrieved from the database
		const borrowCount = 0;
		document.getElementById("borrow-count-text").textContent = borrowCount;
	</script>
</body>
<title>Timmies</title>
<div class="container">
		<h1 class="heading">Your Timmies</h1>
		<div class="Timmies-count">
			<i class="fas fa-book book-icon"></i>
			<span id="borrow-count-text">0</span> Timmies
		</div>
	</div>
	<script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
	<script>
		// Replace 0 with the actual borrow count value retrieved from the database
		const TimmiesCount = 0;
		document.getElementById("borrow-count-text").textContent = borrowCount;
	</script>

<a href="main.php"> <button>return</button></a>

<a href="logout.php"><button>Logout</button></a>



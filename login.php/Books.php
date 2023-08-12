<?php
 session_start();

 include("connect.php");
 include("functions.php");
 include("dbh.php");
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHIEFS</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- header starts here -->
      <header class="header">
       <a href="#" class="logo" > <i class="fas fa-book"> MAIN</i></a>
       
        <nav class="navbar">
           <a href="main.php" class="main-home"> Home </a>
           
           <a href= "index.php" >Timmies</a>
        </nav>
      <div class="icons">
       
	  <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Go</button>
    </form>
      </div>
   

      </header>
      
      <h1>ENGLISH</h1>


	<title>Books for Sale</title>
	<style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			gap: 20px;
			margin: 20px;
		}

		.book {
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: #f2f2f2;
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 10px;
			width: 200px;
			height: 300px;
		}

		.book img {
			max-width: 150px;
			max-height: 200px;
		}

		.book h3 {
			font-size: 18px;
			margin-top: 10px;
			margin-bottom: 5px;
		}

		.book p {
			font-size: 14px;
			margin: 0;
			text-align: center;
		}

		.book button {
			margin-top: 10px;
			padding: 8px 16px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 14px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="book">
			<img src="Books/Book1.png" alt="Book 1">
			<h3>ComScie In One Fat..</h3>
			<p>available</p>
			<a href="borrow.php"> <button> Borrow</button> </a>
		</div>
		<div class="book">
			<img src="Books/Book2.png" alt="Book 2">
			<h3>Science In One Fat Book</h3>
			<p>available</p>
			<a href="borrow.php"><button>Borrow</button> </a>
		</div>
		<div class="book">
			<img src="Books/book3.jpg" alt="Book 3">
			<h3>English In One Fat Book</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
		</div>
    <div class="book">
			<img src="Books/Book4.jpg" alt="Book 3">
			<h3>Arduino Programming</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="Books/book5.jpg" alt="Book 3">
			<h3>The Pragmatic Programmer</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="Books/book6.jpg" alt="Book 3">
			<h3>Programming for Beginners</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="Books/book7.jpg" alt="Book 3">
			<h3>Js for Beginners</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  </div>


  
     
</body>
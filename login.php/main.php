<?php
 
 session_start();

	include("connect.php");
	include("functions.php");
    include("dbh.php");
	$user_data = check_login($con);

 
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
           <a href="Books.php" class=""> More Books</a>
           <a href= "index.php" >Timmies</a>
        </nav>
      <div class="icons">
      <a href="logout.php"><div  class="fa-solid fa-right-from-bracket">logout</div> </a>

    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Go</button>
    </form>

      <a href="Books.php" >
	 <div id="Mbooks-btn" class="fas fa-book-open"></div> </a>

    <a href="Profile.php"> <div   id="Mlogin-btn" class="fas fa-user"></div> </a>
		
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
			<img src="images/book1.jpg" alt="Book 1">
			<h3>Charlotte's web</h3>
			<p>Unavailable</p>
			<a href="failedborrow.php"> <button> Borrow</button> </a>
		</div>
		<div class="book">
			<img src="images/book2.jpg" alt="Book 2">
			<h3>Peter Pan</h3>
			<p>available</p>
			<a href="borrow.php"><button>Borrow</button> </a>
		</div>
		<div class="book">
			<img src="images/book3.jpg" alt="Book 3">
			<h3>A wrinkle in time</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
		</div>
    <div class="book">
			<img src="images/Book4jpg.jpg" alt="Book 3">
			<h3>The Gruffalo</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="images/book5.jpg" alt="Book 3">
			<h3>The Jungle book</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="images/book6.jpg" alt="Book 3">
			<h3>Charlie cook</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  <div class="book">
			<img src="images/boo7.jpg" alt="Book 3">
			<h3>The Wonky Donkey</h3>
			<p>available</p>
			 <a href="borrow.php"><button>Borrow</button> </a>
	</div>
  </div>
  <hr>
<h1>ALL articles: </h1>
<div class="article-container">
  
  <?php
     $sql = "SELECT * FROM article";
	 $result = mysqli_query($conn, $sql);
	 $queryResults = mysqli_num_rows($result);

	 if($queryResults > 0 ){
       while($row = mysqli_fetch_assoc($result)){
              echo "<div class = 'article-box'> 
			     <h2> ".$row['a_title']." </h2>
				 <h3> <i> ".$row['a_text']."</i> </h3>
				 <h3> ".$row['a_date']." </h3>
				 <h3> ".$row['a_author']." </h3>
			  </div>";
	   }
	 }
	 ?>
     
</body>
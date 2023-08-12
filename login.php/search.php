<?php
session_start();

include("connect.php");
include("functions.php");
include("dbh.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Search Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        color: #333;
        margin: 0;
        padding: 0;
      }
      h1 {
        font-size: 36px;
        margin: 20px;
      }
      .article-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: justify;
        line-height: 1.5;
        background-color: #fff;
      }
      .article-box {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
      }
      .article-box h2 {
        font-size: 24px;
        margin-bottom: 10px;
      }
      .article-box h3 {
        font-size: 18px;
        margin-bottom: 5px;
      }
      .article-box i {
        font-style: italic;
      }
      .button {
  display: inline-block;
  background-color: #4CAF50;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  align-items: center;
  display: block;
  margin: 0 auto;
}

.button:hover {
  background-color: #3e8e41;
}
    </style>
  </head>
  <body>
    <h1>Search Page</h1>
    <div class="article-container">
      <?php
        if(isset($_POST['submit-search'])){
          $search = mysqli_real_escape_string($conn, $_POST['search']);
          $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR  a_text LIKE '%$search%' OR  
          a_author LIKE '%$search%' OR  a_date LIKE '%$search%'";

          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);

          if ($queryResult > 0){
              while($row = mysqli_fetch_assoc ($result)){
                  echo "<div class='article-box'> 
                  <h2>".$row['a_title']."</h2>
                  <h3><i>".$row['a_text']."</i></h3>
                  <h3>".$row['a_date']."</h3>
                  <h3>".$row['a_author']."</h3>
                  </div>";
              }
          } else {
              echo "There are no results matching your search :(";
          }   
        }
      ?>
    </div>
    <a href="main.php"> <button class="button"> Return</button> </a>
  </body>
</html>

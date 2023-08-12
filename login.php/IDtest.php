<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("functions.php");

$user_data = check_login($con);



 

?>
<head>

</head>
<style> 
*{
  text-align: center;
  
}
img {
  width: 35%;
  height: 150px;
  object-fit: cover;
  margin-bottom: 10px;
}
#profile {
display: none;
}
button{
  background-color:  darkgoldenrod;
  
}

body {
  width: 100%;
  height:100vh;
  background-image: linear-gradient(rgba(0,0,50,0.8),rgba(0,0,50,0.8)) ,url(juan_sumulong.jpg);
  background-position:center;
  background-size:cover;
  position:relative;
}
.FormBox{
    width: 90%;
    max-width: 450px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50% );
    background: #fff;
    padding: 50px 60px 70px;
    text-align: center;
}
.FormBox h1 {
 font-size: 30px;
 margin: 60px;
 color: darkred;
 position: relative;
}
.FormBox h1::after{
    content: '';
    width: 30px;
    height: 4px;
    border-radius: 3px;
    background: darkred;
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%) ;
}
</style>
<div class="FormBox">
Hello, <?php echo $user_data['user_name']; ?>
<br> <br>
<head>
<button onclick="displayProfile()">Display Profile</button>
<div id="profile">
<img src= "no-profile-picture-icon-18.jpg" alt="Library Card">
<br>
user:  <?php echo $user_data['user_name']; ?>
<br>
id:    <?php echo $user_data['user_id']; ?>
</head>
</div>
<br>
<a href="main.php">
     <button>Next</button>

    </a>
  <div class="container signin">
    <p><a href="logout.php">Logout</a>.</p>
  </div>
</div>
  <script> function displayProfile() {
  var profile = document.getElementById("profile");
  if (profile.style.display === "none") {
    profile.style.display = "block";
  } else {
    profile.style.display = "none";
  }
}
</script>
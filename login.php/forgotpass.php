<?php

    $mode = "enter_email";
if(isset($_GET['mode'])){
     $mode = $_GET['mode'];
}

    //something is posted
 if(count($_POST) > 0){

   switch ($mode) {
    case 'enter_email':
            # code...
         break;
    case 'enter_code':
            # code...
         break;
    case 'enter_password':
             # code...
         break;
    
         default:
              # code...
         break;
   }

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
   
<style type = "text/css">
  
*{
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
}
form{
 width: 100%;
 max-width: 200px;
 margin: auto;
 border: solid thin #ccc;
padding: 10px;
}
.textbox{
    padding: 5px;
    width: 180px;
}

</style>

</head>
<body>
 <form method ="post">
    <h1> Forgot Password </h1>
    <h3>Enter your Email below</h3>
         <input class = "textbox"type ="email" name ="email" placeholder= "Email"> <br>
     <br style="clear: both; ">
     <input type = "submit" value = "Next" >
        <br> <br>
     <div> <a href = "login.php"> Login </a> </div> 
 </form>
</body>
</html>
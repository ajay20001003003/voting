<?php
$login = false;
$showError = false;
session_start();
/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_connect1.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $sql = "Select * from users where username='$username'AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
     
     $num=mysqli_num_rows($result);
     
     
     if ($num == 1 ){
         $login = true;
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['username'] = $username;
         
         header("location: welcome.php");
         
        } 
        else{
            $showError = "Invalid Credentials";
        }
        echo var_dump($num);

        */
        ?>
    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
   
    
 
   <!-- <style>
        *{
margin: 0;
padding: 0;
}
body{
    background: url(bg.jpg.jpg) no-repeat center center fixed;
    background-size: cover; 
}
.container h1{
    font-family: 'Heebo', sans-serif;
    width: 100%;
    display: inline-block;
    font-size: 40px;
    border-bottom: 5px solid purple;
    margin-bottom: 15px;
    padding: 13px 0;
}
.container{ 
    color: white;
    position: absolute;
    top: 25%;
    left: 40%; 
}
.box{
    width: 150%; 
    margin: 22px 0px;
    border-bottom: 2px solid purple;
}
.box input{  
    background: none;
    width: 90%;
    padding: 5px 10px;
    font-size: 20px;
    border: none;
    outline:none;
    color: white;
}
.btn{
    color: white;
    cursor: pointer;
    outline: none; 
    margin: 12px 0;
    padding: 10px 21px;
    border: 2px solid purple;
    border-radius: 10px;
    font-size: 18px;
    background: none;
    font-weight: bold;
    
}
.box i{ 
    width: 25px; 
    text-align: center;
}
.btn:hover{
    opacity: 0.5;
    color: purple; 
    background-color: cornsilk;}
    .alert



    </style>-->
    <style>
        .alert{
            margin-top: 3rem;
        }
        h1{
            margin-top: 5rem;
        }
    </style>
  </head>
  <body>
    <?php require 'partial/_navbar1.php' ?>

    <?php
   if(isset($_SESSION['success'])){
    echo ($_SESSION['success']);
   }
   

    ?>

    <div class="container my-4">
     <h1 class="text-center ">Login to E-Vote</h1>
     <form action="/PROJECT2/loginreg.php" method="post">
        <div class="form-group" >
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>



 
   




    <!--<div class="container">
        <h1>Login to E-vote</h1>
        <form action="/LOGINFORM/login.php" method="post">
        <div class="box">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
        </div>
        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
        </div>
        <button class="btn">Sign In</button>
        <button class="btn">Register here!!</button>
        </form>
    </div>


    
    
</body>
</html>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

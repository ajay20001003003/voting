<?php


session_start();




/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_connect1.php';
    $username = $_POST["username"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`,`name`, `dt`) VALUES ('$username', '$password', '$name',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            header("location: login.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}*/

/*include 'partial/_connect1.php';


    $address = $_POST['address'];
    $tmp_photo = $_POST['photo']['tmp_name'];
    $photo = $_POST['photo']['name'];




$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$name = $_POST["name"];
$cpassword = $_POST["cpassword"];
$std=$_POST['std'];
$exists=false;
if(($password == $cpassword) && $exists==false){
move_uploaded_file($tmp_photo,"upload/$photo");

$sql = "INSERT INTO `users` ( `username`, `password`,`name`,`address`,`mobile`,`photo`,`standard` ,`dt`,`status`,`votes`) VALUES ('$username', '$password', '$name','$address','$mobile','$photo','$std',current_timestamp(),0,0)";
        $result = mysqli_query($conn, $sql);
        echo "data inserted";
        if ($result){
            $showAlert = true;
            header("location: login.php");
        }
}
else{
    $showError = "Passwords do not match";
    //header("location: signup.php");
}*/





    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
 <style>   body {
            background: url(bg3.jpg) no-repeat center center fixed;
            background-size: cover;
            opacity: .8;
            color: #82c9b1;
            font-size: 1.5rem;
          
        }
        .form-control{
            background-color: black;
            color: white;
            font-weight: bold;
        }
        .my-4{
            margin-top: 5rem;
        }
        .alert{
            margin-top: 3rem;
        }</style>
  </head>
  <body>
    <?php require 'partial/_navbar1.php' ?>
    <?php
     
        if(isset($_SESSION['success'])){
            echo ($_SESSION['success']);
           }
     
    ?>
   
    

    <div class="container my-4 " style="width: 40%;">
     <h1 class="text-center sticky-top" style="margin-top: 4rem;">Signup to our website</h1>
     <form action="/PROJECT2/register.php" method="post" enctype="multipart/form-data" >
        <div class="form-group-text"style="text-align:left;"> 
            <label for="username">Username</label>
            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
            
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="number" class="form-control" id="mobile" name="mobile" required>
        </div>
        <!--<div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" name="Address" required>
        </div>-->
        <div class="form-group">
        <label for="std">Role</label>
            <select class="form-select w-100 m-auto" name="std" >
           
             <option value="voter">voter</option>
             <option value="group">Group</option>
             
               </select>
        </div>
        <div class="form-group">
            <label for="photo">photo</label>
            <input type="file" class="form-control" id="photo" name="photo" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-success text-center " style="text-align:center;">SignUp</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$showAlert = false;
session_start();
$showError = false;
$showMessage = "password do not match";
include 'partial/_connect1.php';


    //@$address = $_POST['address'];
    $tmp_photo = $_FILES['photo']['tmp_name'];
    $photo = $_FILES['photo']['name'];




$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$name = $_POST["name"];
$cpassword = $_POST["cpassword"];
$std=$_POST['std'];
$exists=false;
if(($password == $cpassword) ){
move_uploaded_file($tmp_photo,"upload/$photo");

$sql = "INSERT INTO `users` ( `username`, `password`,`name`,`mobile`,`photo`,`standard` ,`dt`,`status`,`votes`) VALUES ('$username', '$password', '$name','$mobile','$photo','$std',current_timestamp(),0,0)";
        $result = mysqli_query($conn, $sql);
     
        if ($result){
            //$showAlert = true;
            $_SESSION['success']=  ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
            
            
            header("location: login.php");
        }}


        else{
            $_SESSION['success']=  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error!</strong> '.$showMessage.'
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
           </button>
           </div> ';
        header("location: signup.php");

        }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>


</body>
</html>
<?php
$login = false;
$showError =' invalid password';
//if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_connect1.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
  
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
     $num=mysqli_num_rows($result);
     // echo var_dump($num);
     
     if ($num>0 ){
        $sql="select username,photo,votes,id,name from `users` where standard='group'";
        $resultgroup=mysqli_query($conn,$sql);
        session_start();
        $_SESSION['loggedin'] = true;
        $login = true;
        if(mysqli_num_rows($resultgroup)>0){
            $group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
           
            $_SESSION['group']=$group;
          
        }
        $data=mysqli_fetch_array($result);
       // echo var_dump($data);

        $_SESSION['username'] =$data['username'];
        $_SESSION['id'] =$data['id'];
        $_SESSION['status'] =$data['status']; 
        $_SESSION['data']=$data;
       // echo var_dump($_SESSION['data']);
     
         
        header("location: welcome.php");
         
        } 
        else{
            header("location: login.php");
            $showError = true;
            
        }
        //echo ($showError);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alert-success{
            margin-top: 2rem;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
       // header("location: login.php");

    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> You have enter wrong password</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';



    }
   
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>

<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding: 0px;">
  <a class="navbar-brand" href="/LOGINFORM"><img src="evote-logo.png" alt="" style="height: 47px;width:170px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:1.5rem;mx:30px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/PROJECT2/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';

      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/PROJECT2/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/PROJECT2/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item ">
      <a class="nav-link" href="/PROJECT2/logout.php">Logout</a>
      </li>';
    }


    
  

  
      
      
      
    echo ' </ul>
       
    
  </div>
</nav>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 
</style>
</head>
<body>



</body>
</html>
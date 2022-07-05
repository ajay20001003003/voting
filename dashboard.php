<?php

session_start();
if(!isset($_SESSION['id'])){
  header('location:login.php');
}
$data = $_SESSION['data'];
if ($_SESSION['status'] == 1) {
  $status = '<b class="text-success">voted</b>';
} else {
  $status = '<b class="text-danger"> not-voted</b>';
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbord E-voting system</title>
  <style>
    img {
      height: 150px;
      width: 150px;
      border-radius: 50%;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-secondary text-light">
  <div class="container my-5">
    <a href="welcome.php"><button class="btn btn-dark text-light px-3">Back</button></a>
    <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
    <h1 class="my-3">E-voting system</h1>
    <div class="row my-5">
      <div class="col-md-7">
<?php
      if(isset($_SESSION['group'])){
        $group=$_SESSION['group'];
       
        for($i=0;$i<count($group);$i++){
?>
          <div class="row">
            <div class="col-md-4">
              <img src="upload/<?php echo $group[$i]['photo'];?>" alt="Group image">
            </div>
            <div class="col-md-8">
              <strong class="text-dark h5">Group Name: <?php echo $group[$i]["name"];?></strong><br><br>
              <strong class="text-dark h5">Votes:<?php echo $group[$i]['votes'];?></strong><br><br>
            </div>
          </div>
          <form action="voting.php" method="POST">
        
            <input type="hidden" name="groupvote" value="<?php echo $group[$i]["votes"];?>">
            <input type="hidden" name="groupid" value="<?php echo $group[$i]["id"];?>">
            <?php
         if($_SESSION['status']==1){
           ?>
          <button class="bg-success my-4 text-white px-3"> voted</button>
          <?php
         }
         else{
           ?>
      <button class="bg-danger my-4 text-white px-3" type="submit">vote</button>
      <?php
         }
         ?>
         </form>
         <hr>
         <?php



        }

      }
      else{
        ?>
        <div class="container">
          <p>no group exist to display</p>
          </div>
          <?php
      }
      ?>











      </div>




      <!--groups-->
      <div class="col-md-5">

        <img src=" upload/<?php echo $data["photo"]; ?>" alt="users image"><br><br>
        <strong class="text-dark h5">Name:</strong>
        <?php echo $data["name"]; ?><br><br>
        <strong class="text-dark h5">mobile:</strong>
        <?php echo $data["mobile"]; ?><br><br>
        <strong class="text-dark h5">status:</strong>
        <?php echo $status; ?><br><br>


        <!--usersprofile-->
      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
include('partial/_connect1.php');
$vote=$_POST['groupvote'];
$totalvote=$vote+1;

$gid=$_POST['groupid'];

$uid=$_SESSION['id'];
$updatevote=mysqli_query($conn,"update `users` set status=1 where id='$uid' ");
$updatestatus=mysqli_query($conn,"update `users` set votes='$totalvote' where id='$gid' ");


if($updatevote and $updatestatus){  
  $getgroup=mysqli_query($conn,"select username,photo votes,name,id,votes from `users` where standard='group'");
  $group=mysqli_fetch_all($getgroup,MYSQLI_ASSOC);
  $_SESSION['group']=$group;
  $_SESSION['status']=1;
 
  echo '
  <script>
  alert("voting successfull!!!");
   window.location="dashboard.php";
     </script>';

}
else{
    echo'
    <script>
    alert("technical error !! vote after some time");
   window.location="dashboard.php";
    </script>';
}


?>
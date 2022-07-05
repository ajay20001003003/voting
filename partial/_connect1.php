<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "voting";

$conn = mysqli_connect($server, $username, $password, $database);//connect to the server
if (!$conn){

    die("Error". mysqli_connect_error());
}

?>
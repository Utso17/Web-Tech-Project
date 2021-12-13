<?php
session_start();

$server = "localhost";
$username ="root";
$password = "";
$db = "project";


$con = mysqli_connect($server, $username, $password, $db);


// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }




?>
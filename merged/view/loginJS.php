<?php
include("../Model/connection.php");

define("USERNAME", "webtechJ");
define("PASSWORD", "1234");
$response = array();
try {
  $username = $_POST['username'];
  $password = $_POST['password'];

  /*   $login_query = "SELECT * from donors WHERE name='$username' ";
  $login_result = mysqli_query($con, $login_query); */

  $login_data_query = "SELECT * from donors WHERE name='$username' and password='$password' ";
  $login_data_result = mysqli_query($con, $login_data_query);

  if (mysqli_num_rows($login_data_result) > 0) {
    $_SESSION['login'] = 'Login Successful.';

    $user_data = mysqli_fetch_assoc($login_data_result);
    $_SESSION['username'] = $user_data;
    $response["status"] = "success";
    $response["msg"] = "Login Successfully";
  } else {
    $response["status"] = "error";
    $response["msg"] = "Wrong Credentials. Please Check and Enter Correct Credentials.";
  }
} catch (Exception $ex) {
  $response["status"] = "error";
  $response["msg"] = $ex->getMessage();
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response); 
//---- Commented Code
{
  //echo "<span>Wrong Credentials. Please Check and Enter Correct Credentials.<a style='color:tomato;background-color:white;text-decoration:none;margin-left: 30px;padding-left:3px;padding-right:3px;' href='login.php'>X</a></span>";

  /* if (mysqli_num_rows($login_result) > 0) {
    
  } else {
    $response["status"] = "error";
    $response["msg"] = $ex->getMessage();
    echo "<span>You are not Signed Up. Please Sign Up first. <a href='sign-up.php'>Go to Sign Up Page to Sign Up.</a></span>";
  } */
}

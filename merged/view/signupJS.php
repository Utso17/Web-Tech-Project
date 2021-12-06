<?php
include("../Model/connection.php");
$response = array();
try {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);

    $signup_query = "INSERT INTO donors (email, phone, name, password) VALUES('$email','$phone','$username','$password')";

    if (mysqli_query($con, $signup_query)) {
        $response["status"] = "success";
        $response["msg"] = "Sign Up is Successful. Enjoy full access in our Website.";
    } else {
        $response["status"] = "error";
        $response["msg"] = "Please Try Again, something went wrong";
    }
} catch (Exception $ex) {
    $response["status"] = "error";
    $response["msg"] = $ex->getMessage();
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

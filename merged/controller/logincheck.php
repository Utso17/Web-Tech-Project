<?php
session_start();
require_once('../model/usersServiceT.php');



if(isset($_REQUEST['submit'])){
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];




if(empty($name) || empty($password)){
echo " field required...";
header('location: ../view/login.html?msg=null_login');



}else{
$user = [
'name'=> $name,
'password'=> $password
];




$status = validate($user);
$_SESSION['flag'] = "true";
$_SESSION['name'] = $name;



if($status){
setcookie('flag', $name, time()+(30*86400), '/');
header('location: ../view/member.php');
}
else{
header('location: ../view/login.html?wrong_information');



}



}
}else{
header('location: ../view/login.html');
}



?>
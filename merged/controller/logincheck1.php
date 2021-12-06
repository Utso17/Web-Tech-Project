<?php
	session_start();
	require_once('../model/usersService.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];


		if(empty($username) || empty($password)){
echo " field required...";
header('location: ../view/login1.php?msg=null_login');

}else{
$user = [
'username'=> $username,
'password'=> $password
];


$status = validate($user);
$_SESSION['flag'] = "true";
$_SESSION['username'] = $username;

if($status){
setcookie('flag', $username, time()+(30*86400), '/');
header('location: ../view/home1.php?msg=admin_page');
}
else{
header('location: ../view/login1.php?wrong_information');

}

}
}else{
header('location: ../view/login1.php');
}

?>
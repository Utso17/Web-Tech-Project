<?php
	session_start();
	require_once('../model/musersModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				

				$status = validate($username, $password);
				
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../view/member.php');
				}else{
					echo "invalid username/password";
				}}}
	}
?>
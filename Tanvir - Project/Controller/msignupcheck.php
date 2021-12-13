<?php
	session_start();
	require_once('../model/musersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$phone 		= $_POST['phone'];

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
					if($_POST['phone'] != ""){


					$user = [
								'username'=> $username, 
								'password'=>$password, 
								'email'=> $email, 
								'phone'=> $phone,
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../view/mlogin.php');
					}else{
						echo "try again...";
					}

					}else{
						echo "";
					}
				}else{
					echo "";
				}	
			}else{
				echo "";
			}
		}else{
			echo "";
		}
	}
?>
<?php
	session_start();
	require_once('../model/CharityModel.php');

	if(isset($_POST['submit'])){
		$Charity_name = $_POST['Charity_name'];

		if($Charity_name != ""){	

				$status = addUser($Charity_name);
				
				if($status){
					header('location: ../view/CharityList.php');
				}
		}else{
			echo "Invalid Charity_name...";
		}
	}
?>
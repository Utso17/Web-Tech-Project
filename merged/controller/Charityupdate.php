<?php 
	require_once('../model/CharityModel.php');

	$Charity_name 	= $_REQUEST['Charity_name'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'Charity_name'=>$Charity_name];
	$status = editCharity($user);

	if($status){
		header('location: ../view/CharityList.php');
	}else{
		header('location: ../view/editCharity.php?id='.$id);
	}

?>
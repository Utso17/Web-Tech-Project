<?php 
	require_once('db.php');


	function addUser($user){
		$con = getConnection();
		$sql= "insert into charity_list values('','{$user['Charity_name']}'";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from charity_list";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from charity_list where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editCharity($user){
		$con = getConnection();
		$sql= "update charity_list set Charity_name='{$user['Charity_name']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from charity_list where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>
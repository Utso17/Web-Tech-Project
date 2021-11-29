<?php 

	$host='localhost';
	$user='root';
	$pass='';
	$db='project';

	$con=mysqli_connect($host,$user,$pass,$db);
	if($con){
		echo 'success.';
	}
	$sql="insert into adminlogin (username,email,phone,password) values(katibur','katiburrahmansany@gmail.com','01788735788','7887')";
	$query=mysqli_query($con,$sql);
	if ($query) {
		echo 'data inserted successfully';
	}

?>
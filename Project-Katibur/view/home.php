<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Admin Home Page</title>
</head>
<body>
	<center>
	<h1>Welcome Home Admin!</h1>
	<a href="../model/donorlist.php"> Donor List</a> |
	<a href="../model/volunteerlist.php"> Volunteer List</a> |
	<a href="../model/evmlist.php"> Event Manager List</a><br><br><br>
	<a href="../controller/logout.php"> logout</a>
	</center>
</body>
</html>

<?php
	}else{
		include_once('../view/login.html');
	}
?>
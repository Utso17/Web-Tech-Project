<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../asset/s.css">
	<title> Admin Home Page</title>
</head>
<body>
	<h2>Welcome Home Admin!</h2>
	<h4>
	<a align="right" href="../controller/logout1.php"> logout</a>
    </h4>
   <h3>
   	<a href="../view/adminp.php">Admin Profile</a> <br><br><br><br><br><br><br><br><br>
	<a href="../view/donorlist1.php"> Donor List</a> <br><br>
	<a href="../view/evmlist1.php"> Event Manager List</a><br><br>
	<a href="../view/receiverlist1.php"> Receiver List</a><br><br><br>
</h3>
</body>
</html>

<?php
	}else{
		include_once('../view/login1.php');
	}
?>

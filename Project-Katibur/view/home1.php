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
	<a href="../view/donorlist1.php"> Donor List</a> |
	<a href="../view/receiverlist1.php"> Receiver List</a> |
	<a href="../view/evmlist1.php"> Event Manager List</a><br><br><br>
	<a href="../controller/logout1.php"> logout</a>
	</center>
</body>
</html>

<?php
	}else{
		include_once('../view/login1.php');
	}
?>
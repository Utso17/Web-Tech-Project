	<?php

	session_start();


	require_once('../model/usersService.php');
	$userlist = getalldonors();
	if(isset($_REQUEST['submit']))
	{

	}

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../view/style.css">
	<title>View Donors</title>

	</head>
	<body class="rr">
	<form method="post" >

	<br>

	<fieldset>
	<center>
	<h3>Donor List:</h3>
	<p align="right"><a href="createalldonors.php"> <input type="button" value="create donor" ></a> </p>


	<table border="1">
	<tr>
	<td>ID</td>
	<td>Username</td>
	<td>Password</td>
	<td>Email</td>
	<td>Phone</td>
	<td>Action</td>
	</tr>




	<?php

	for($i=0; $i < count($userlist); $i++) {
	?>
	<tr>
	<td><?= $userlist[$i]['id'] ?></td>
	<td><?= $userlist[$i]['name'] ?></td>
	<td><?= $userlist[$i]['password'] ?></td>
	<td><?= $userlist[$i]['email'] ?></td>
	<td><?= $userlist[$i]['phone'] ?></td>

	<td>
	<a href="editalldonors.php?id=<?= $userlist[$i]['id'] ?>&name=<?= $userlist[$i]['name'] ?>&password=<?= $userlist[$i]['password'] ?>&email=<?= $userlist[$i]['email'] ?>&phone=<?= $userlist[$i]['phone'] ?>"> EDIT</a> |
	<a href="deletealldonors.php?id=<?= $userlist[$i]['id'] ?>"> DELETE</a>
	</td>

	</tr>


	<?php } ?>



	</center>


	</table>
	</fieldset>


	<h3 align="left"><a href="../view/home1.php"> <input type="button" value="Back" ></a> </h3>

	<h3 align="right"><a href="../controller/logout1.php"> <input type="button" value="Logout" ></a> </h3>
	<center>

	</center>

	</form>

	</body>
	</html>
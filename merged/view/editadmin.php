	<?php
	session_start();
	

	require_once('../model/usersService.php');


	if(isset($_REQUEST['submit'])){
	if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) ||empty($_POST['phone']))
	{
	echo'<p class="form-forget">please Insert data in every field</p>';

	}
	else{
	$userlist = updateadmin();

	header('location:adminp.php?msg=invalid');
	}

	}

	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Edit Admin</title>
	<link rel="stylesheet" href="../asset/s.css">
	</head>
	<body>
	<form method="post" action="">
	<center>
	<fieldset>
	<h3>Update Admin</h3>

	<table>
	<tr>
	<tr>
	<td>Username</td>
	<td><input type="text" id="username" name="username" value="<?php echo $_GET['username']; ?>" onkeyup="f5()"></td>
	<td><p id="Username" class="form-forget"> </p></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="password" id="password" name="password" value="<?php echo $_GET['password']; ?>" onkeyup="f6()"></td>
	<td><p id="passwordjs" class="form-forget"> </p></td>
	</tr>

	<tr>
	<td>Email</td>
	<td><input type="email" id="email" name="email" value="<?php echo $_GET['email']; ?>" onkeyup="f7()"></td>
	<td><p id="emailjs" class="form-forget"> </p></td>
	</tr>
	<tr>
	<td>Phone</td>
	<td><input type="text" id="phone" name="phone" value="<?php echo $_GET['phone']; ?>" onkeyup="f8()"></td>
	<td><p id="phonejs" class="form-forget"> </p></td>


	</select> <br> </td>
	</tr>

	<tr><td></td><td><hr><hr></td></tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="update"></td>



	</tr>

	</table>
	</fieldset>
	<h3 align="left"><a href="adminp.php"> <input type="button" value="Back" ></a> </h3>

	<h3 align="right"><a href="../controller/logout1.php"> <input type="button" value="Logout" ></a> </h3>

	</center>
	</form>
	<script type="text/javascript" src="../asset/valid.js"></script>
	</body>
	</html>
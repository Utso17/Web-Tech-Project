		<?php
		session_start();

		require_once('../model/usersService.php');


		if(isset($_REQUEST['submit'])){


		if(empty($_POST['name']) || empty($_POST['password'])|| empty($_POST['email']) ||empty($_POST['phone']))
		{
		}


		else
		{
		$id = $_REQUEST['id'];
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];




		header('location:receiverlist1.php?msg=invalid');

		$user = [
		'id'=> $id,
		'name'=> $username,
		'password'=> $password,
		'email'=> $email,
		'phone'=> $phone,
		];


		insertallreceivers($user);
		}
		}
		?>


		<!DOCTYPE html>
		<html>
		<head>
		<title>All Receiver list</title>
		<link rel="stylesheet" href="../view/style.css">
		</head>
		<body>
		<form method="post" action="">



		<h2>Insert verified Receiver</h2>
		<table>


		<tr>
		<td>Username</td>
		<td><input type="text" id="name" name="name" onkeyup="f5()"></td>
		<td><p id="name" class="form-forget"> </p></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type="password" id="password" name="password" onkeyup="f6()"></td>
		<td><p id="passwordjs" class="form-forget"> </p></td>
		</tr>

		<tr>
		<td>Email</td>
		<td><input type="text" id="email" name="email" onkeyup="f7()"></td>
		<td><p id="emailjs" class="form-forget"> </p></td>
		</tr>
		<tr>
		<td>phone</td>
		<td><input type="text" id="phone" name="phone" onkeyup="f7()"></td>
		<td><p id="phonejs" class="form-forget"> </p></td>
	    </tr>

		</select> <br></td>
		</tr>
		<tr><td></td><td><hr><hr></td></tr>
		<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add"></td>

		</tr>
		</table>

		<h3 align="left"><a href="receiverlist1.php"> <input type="button" value="Back" ></a> </h3>

		<h3 align="right"><a href="../controller/logout1.php"> <input type="button" value="Logout" ></a> </h3>


		</body>
		</html>
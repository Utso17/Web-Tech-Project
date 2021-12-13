<?php
session_start();



require_once('../model/usersServiceT.php');




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






header('location:login.html?msg=invalid');



$user = [
'id'=> $id,
'name'=> $username,
'password'=> $password,
'email'=> $email,
'phone'=> $phone,
];




insertallevm($user);
}
}
?>




<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post" action="">


	<h3 align="right">
         
         <a href="Home.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp; 
         <a href="resources.html">Resources</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="past&presentEvents.html">Past & Present Events</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="charities.html">Charities</a>&nbsp;&nbsp;&nbsp;&nbsp;
    
     </h3>

     <br><br><br><br>

     <h3 align="right">
    
            <a href="login1.php">Admin Login</a> &nbsp;&nbsp;&nbsp;&nbsp;

            <a href="donor-login.php">Donor Login</a> &nbsp;&nbsp;&nbsp;&nbsp;

     </h3>


<form >
		<fieldset align="center">
			<legend>Signup</legend>
			<table align="center">

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
			<td><input type="int" id="phone" name="phone" onkeyup="f7()"></td>
			<td><p id="phonejs" class="form-forget"> </p></td>
			</tr>

			<tr>
			<td>Date of Birth</td>
			<td><input type="date" id="date" name="Date" onkeyup="f7()"></td>
			<td><p id="phonejs" class="form-forget"> </p></td>
			</tr>



			</select> <br></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>



			</tr>
		</table>

		<p>Already have an account? &nbsp;&nbsp;&nbsp; <a href="login.html">Login</a></p>

		</fieldset>
	</form>


	<hr>
	<left>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Croudfunding</h2><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>address........address................<br>number...........number</h4>

     </left>

     <center><h1>Thank you for visiting</h1></center>




</body>
</html>
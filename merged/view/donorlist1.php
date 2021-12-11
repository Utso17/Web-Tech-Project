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
	<link rel="stylesheet" href="../asset/s.css">
	<title>View Donors</title>

	</head>
	<body class="rr">
	<form method="post" >


<h2>Search By id</h2>
<form action=""> 
  <input type="text"  onchange="showalluser(this.value)">
       <input type="button" value="Search" >
</form>
	<br>
	<div id="txtHint"><h3>Searched Donor's information will be shown here.</h3> </div>
	<fieldset>
	<center>
	<h3>Donor List:</h3>
	<p align="right"><a href="createalldonors.php"> <input type="button" value="Create New Donor" ></a> </p>
</p>




<p align="right"><a href="../controller/jsonalldonors.php"> <input type="button" value="Click Here To Create Dynamic Json File"  ></a> <br>
<?php
   if(isset($_REQUEST["wrong_information"])){
   	   echo'<p class="form-forget">New dynamic json file has been already created in Asset folder</p>..<a href="../asset/donor.json"target="_blank"> <input type="button" value="All donor list in json"  ></a>';
    }
 ?>




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
	<script type="text/javascript" src="../asset/valid.js"></script>
	</body>
	</html>
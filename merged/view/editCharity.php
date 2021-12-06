<?php 
	require_once('../model/CharityModel.php');

	$id = $_REQUEST['id'];
	$user = getUsersById($id);
?>

<html>
<head>
	<title>Edit New User</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<form method="post" action="../controller/Charityupdate.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Charity Name:</td>
					<td><input type="text" name="Charity_name" value="<?=$user['Charity_name']?>"></td>
				</tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
<?php 

	require_once('../model/CharityModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Charity List</title>
</head>
<body>

	<?php require_once'../model/Links.php'?>

	<br><br><br>

	<table border="1" align="center">
		<tr>
			<th align="center"><h3>ID</h3></th>
			<td align="center"><h3>NAME</h3></td>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['Charity_name']?></td>
		</tr>
	<?php } ?>
	</table>

	<br><br><br>

	<?php  require_once'../model/Credit.php' ?>
</body>
</html>




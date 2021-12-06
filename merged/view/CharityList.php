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

	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['Charity_name']?></td>
			
			<td>
				<a href="editCharity.php?id=<?=$user['id']?>"> Edit Charity</a> | 
				<a href="deleteCharity.php?id=<?=$user['id']?>"> Delete Charity</a> 
			</td>
		</tr>
	<?php } ?>
	</table>

	<a href="addCharity.php"> Add Charity</a> 
</body>
</html>
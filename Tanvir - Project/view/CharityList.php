<?php 

	require_once('../model/CharityModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Charity List</title>

	<link rel="stylesheet" href="../asset/bg.css">

	
</head>
<body>

	<?php require_once'../model/Links.php'?>


	<br>



	 <p align="right"><a href="../controller/jsonevm.php"> <input type="button" value="Create dynamic json file" ></a> <br> 
<?php
if(isset($_REQUEST["wrong_information"])){
echo'<p class="form-forget">New dynamic json file has been already created in Asset folder</p>..<a href="../asset/charity.json"target="_blank"> <input type="button" value="All user list in json" ></a>';
}
?> 









	<table align="center" border="6">
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

	<p align="center"><a href="addCharity.php"> Add Charity</a> </p>
	<script type="text/javascript" src="valid.js"></script>

	<br><br><br><br>


	<h3 align="right"><a href="../controller/logout.php"> Logout</a></h3>

	<?php require_once'../model/Credit.php'?>
</body>
</html>
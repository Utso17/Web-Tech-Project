<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Volunteer List</title>
</head>
<body>
	<center>	
		<a href="../view/home.php">Back </a> |
		<a href="../controller/logout.php">logout </a> 
	</center>
	<br>
	<center>
	<table border="1">
		<tr>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<?php 
		$myFile = fopen('../asset/volunteerlist.txt','r');
		while(!feof($myFile)){
			$data = fgets($myFile);
			if($data!=""){
				$volunteer = explode('|',$data);
				?>
				<tr>
					<td><?=$volunteer[0]?></td>
					<td><?=$volunteer[1]?></td>
					<td><?=$volunteer[2]?></td>
					<td>
						<a href="../view/editv.php?name=<?=$volunteer[0]?>">Edit</a>
					    <a href="../view/deletev.php?name=<?=$volunteer[0]?>">Delete</a>
					</td>
				</tr>
				<?php
			}
		}
	?>
	<tr>
		<td colspan="4" align="center"><a href="../view/newv.php?name=<?=$volunteer[0]?>">Add New Volunteer</a></td>
	</tr>
</center>
</table>
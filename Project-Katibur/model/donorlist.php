<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Donor List</title>
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
		$myFile = fopen('../asset/donorlist.txt','r');
		while(!feof($myFile)){
			$data = fgets($myFile);
			if($data!=""){
				$donor = explode('|',$data);
				?>
				<tr>
					<td><?=$donor[0]?></td>
					<td><?=$donor[1]?></td>
					<td><?=$donor[2]?></td>
					<td>
						<a href="../view/editd.php?name=<?=$donor[0]?>">Edit</a>
					    <a href="../view/deleted.php?name=<?=$donor[0]?>">Delete</a>
					</td>
				</tr>
				<?php
			}
		}
	?>
	<tr>
		<td colspan="4" align="center"><a href="../view/newd.php?name=<?=$donor[0]?>">Add New Donor</a></td>
	</tr>
</center>
</table>
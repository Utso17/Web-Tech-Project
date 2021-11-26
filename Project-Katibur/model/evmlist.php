<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Event Manager List</title>
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
		$myFile = fopen('../asset/evmlist.txt','r');
		while(!feof($myFile)){
			$data = fgets($myFile);
			if($data!=""){
				$evm = explode('|',$data);
				?>
				<tr>
					<td><?=$evm[0]?></td>
					<td><?=$evm[1]?></td>
					<td><?=$evm[2]?></td>
					<td>
						<a href="../view/editevm.php?name=<?=$evm[0]?>">Edit</a>
					    <a href="../view/deleteevm.php?name=<?=$evm[0]?>">Delete</a>
					</td>
				</tr>
				<?php
			}
		}
	?>
	<tr>
		<td colspan="4" align="center"><a href="../view/newevm.php?name=<?=$evm[0]?>">Add New Event Manager</a></td>
	</tr>
</center>
</table>
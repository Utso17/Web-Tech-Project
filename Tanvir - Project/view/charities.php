<?php 

	require_once('../model/CharityModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Charity List</title>
	<link rel="stylesheet" href="../asset/bg.css">

	<script> 

  function ajax()
  {

	var name = document.getElementById('name').value;


	var xhttp = new XMLHttpRequest();


	xhttp.open('POST', '../controller/lsc.php', true);

	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	xhttp.send('name='+name);

	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{

			document.getElementById('result').innerHTML = this.responseText;
		}
	}
   }



	</script>
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

	<h1 align="center">Search by ID</h1>
	<h3 align="center"><input  type="text" name="name" id="name" onkeyup="ajax()">
	<input  type="button" name="" value="click" onclick="ajax()"></h3>

	<div id="result"> </div>

	<?php  require_once'../model/Credit.php' ?>
</body>
</html>




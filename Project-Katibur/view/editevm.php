<?php
   $name = $_GET['name'];
   $myFile = fopen('../asset/evmlist.txt','r');
   while(!feof($myFile)){
   	$data = fgets($myFile);
   	if($data!=""){
   		$evm = explode('|',$data);
   		if(trim($evm [0])==$name){
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<center>	
		<a href="../view/home.php">Back </a> |
		<a href="../controller/logout.php">logout </a> 
	</center>
	<form method="post" action="../controller/editevmcheck.php">
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
                    <td>User Type</td>
                    <td> <select name="usertype">
                        <option value="">Event Manager</option>
                    </select>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Edit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
				 <?php
				 return;
			}
		}
	}
	header('location: ../model/evmlist.php');
?>
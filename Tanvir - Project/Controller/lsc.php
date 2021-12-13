<?php

	$id = $_POST['id'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from charity_list where id like '%{$id}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=5>
					<tr>
						<td>ID</td>
						<td>Charity_name</td>
						
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['Charity_name']}</td>
							
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>
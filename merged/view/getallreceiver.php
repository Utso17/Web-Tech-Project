<?php
session_start();
require_once('../model/db1.php');
$mysqli = new mysqli($servername, $dbuser, $dbpass, $database);
if($mysqli->connect_error) {
  exit('Could not connect');
}



$sql = "SELECT id,name, email, phone,password
FROM receiver WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $email, $phone, $password);
$stmt->fetch();
$stmt->close();




echo "<table>";
echo "<tr>";
echo "<th>UserID:::</th>";
echo "<td>" . $id . "</td> ";
echo "<th>UserName:::</th>";
echo "<td>" . $name . "</td>";
echo "<th>Email:::</th>";
echo "<td>" . $email . "</td>";
echo "<th>Phone:::</th>";
echo "<td>" . $phone . "</td>";
echo "<th>Password:::</th>";
echo "<td>" . $password . "</td>";
echo "</tr>";
echo "</table>";

?>
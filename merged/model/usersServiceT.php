<?php

require_once('db.php');

function validate($user){
$conn = getConnection();
$sql = "select * from eventmanager where name='{$user['name']}' and password='{$user['password']}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(count($row) > 0){
return true;
}else{
return false;
}
}

function insertallevm($user){
$conn = getConnection();
$sql = "insert into eventmanager values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['password']}')";
$status = mysqli_query($conn, $sql);
if($status){
return true;
}else{
return false;
}
}
?>
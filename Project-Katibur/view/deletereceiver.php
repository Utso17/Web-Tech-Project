<?php


require_once('../model/usersService.php');



$id = $_GET['id'];
$userlist = deleteallreceivers($id);



if($userlist){

header('location:../view/receiverlist1.php');
}else{
echo "fail";

}

?>
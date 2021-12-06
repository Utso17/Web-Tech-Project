<?php


require_once('../model/usersService.php');



$id = $_GET['id'];
$userlist = deletealldonors($id);



if($userlist){

header('location:../view/donorlist1.php');
}else{
echo "fail";

}

?>
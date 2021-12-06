<?php


require_once('../model/usersService.php');



$id = $_GET['id'];
$userlist = deleteallevm($id);



if($userlist){

header('location:../view/evmlist1.php');
}else{
echo "fail";

}

?>
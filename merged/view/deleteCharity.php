<?php


require_once('../model/CharityModel.php');



$id = $_GET['id'];
$userlist = deleteUser($id);



if($userlist){

header('location:../view/Charitylist.php');
}else{
echo "fail";

}

?>
<?php
 
require_once('db1.php');
 
    function validate($user){
        $conn = getConnection();
        $sql = "select * from admin where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
 
        if(count($row) > 0){
            return true;
        }else{
            return false;
        }
    }



    function getalldonors(){
        $conn = getConnection();
        $sql = "select * from donors";
        $result = mysqli_query($conn, $sql);

    $user =[];

    while($data = mysqli_fetch_assoc($result)){
    array_push($user, $data);
    }
    return $user;
    }



    function updatealldonors(){
    $conn = getConnection();
    $id = $_POST['id'];
    $username = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql ="update donors set name='$username', password='$password', email='$email', phone='$phone' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }


    function insertalldonors($user){
    $conn = getConnection();
    $sql = "insert into donors values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['password']}')";
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }


    function deletealldonors($id){
    $conn = getConnection();
    $sql = "delete from donors where id=$id";
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }









    function getallreceivers(){
        $conn = getConnection();
        $sql = "select * from receiver";
        $result = mysqli_query($conn, $sql);

    $user =[];

    while($data = mysqli_fetch_assoc($result)){
    array_push($user, $data);
    }
    return $user;
    }


    function updateallreceivers(){
    $conn = getConnection();
    $id = $_POST['id'];
    $username = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql ="update receiver set name='$username', password='$password', email='$email', phone='$phone' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }

    function insertallreceivers($user){
    $conn = getConnection();
    $sql = "insert into receiver values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['password']}')";
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }

    function deleteallreceivers($id){
    $conn = getConnection();
    $sql = "delete from receiver where id=$id";
    $status = mysqli_query($conn, $sql);
    if($status){
    return true;
    }else{
    return false;
    }
    }










        function getallevm(){
            $conn = getConnection();
            $sql = "select * from eventmanager";
            $result = mysqli_query($conn, $sql);

        $user =[];

        while($data = mysqli_fetch_assoc($result)){
        array_push($user, $data);
        }
        return $user;
        }


        function updateallevm(){
        $conn = getConnection();
        $id = $_POST['id'];
        $username = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql ="update eventmanager set name='$username', password='$password', email='$email', phone='$phone' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $status = mysqli_query($conn, $sql);
        if($status){
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

        function deleteallevm($id){
        $conn = getConnection();
        $sql = "delete from eventmanager where id=$id";
        $status = mysqli_query($conn, $sql);
        if($status){
        return true;
        }else{
        return false;
        }
        }



?>
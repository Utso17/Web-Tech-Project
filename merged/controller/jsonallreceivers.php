<?php  

function getData()
{
    $connect = mysqli_connect("localhost", "root", "", "project");  
           $query = "SELECT * FROM receiver";  
           $result = mysqli_query($connect, $query);  
           $userData = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
            $userData[] = array(
                'id'=> $row["id"],
                'name'=> $row["name"],
                'email'=> $row["email"],
                'phone'=> $row["phone"],
                'password'=> $row["password"]
            );
           }
           return json_encode($userData);
}
$fileName="../asset/receiver.json";
if(file_put_contents($fileName,getData()))
{
    header('location:../view/receiverlist1.php?wrong_information');
}
else{
    echo "something went wrong";
} 
 ?> 
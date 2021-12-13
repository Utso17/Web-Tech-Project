<?php



function getData()
{
$connect = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT * FROM eventmanager";
$result = mysqli_query($connect, $query);
$userData = array();
while($row = mysqli_fetch_assoc($result))
{
$userData[] = array(
'id'=> $row["id"],
'username'=> $row["username"],
'email'=> $row["email"],
'phone'=> $row["phone"],
'password'=> $row["password"]
);
}
return json_encode($userData);
}
$fileName="../asset/charity.json";
if(file_put_contents($fileName,getData()))
{
//echo $fileName."file created";
header('location:../view/CharityList.php?wrong_information');
}
else{
echo "something went wrong";
}
?>
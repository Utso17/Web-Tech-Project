

<?php
include("../model/donorDb.php");
if(isset($_POST['submit_signup'])){

    $email = trim($_POST['email']);
    $username =trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $password =trim($_POST['password']);

    $signup_query ="INSERT INTO donors (email, phone, name, password) VALUES('$email','$phone','$username','$password')";
     $signup_result = mysqli_query($con, $signup_query);

   if(isset($signup_result)){
       $_SESSION['signup'] = "<span>Sign Up is Successful. Enjoy full access in our Website. <a href='donor-login.php'>Go to Log In page to Log In.</a></span>";
       echo $_SESSION['signup'];
    }
   

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowdfunding Website</title>
    <style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}
.login-form{
    margin-top: 40px!important;
    margin: auto;
    display:flex;
    flex-direction: column;
    width: 450px;
}
.login-form input{
    height: 40px;
    margin: 5px;
    padding: 3px;
}
.login-form .input-button:hover{
   cursor: pointer;
}


    </style>
</head>
<body>
    <div>
        <div><h1 style="text-align:center;">Crowdfunding Website</h1>
    <p style="text-align:center;">Welcome Donor!</p>
    <p style="text-align:center;">Enter Your Personal Information</p></div>
    <br>
    <div style="width:410px;margin: auto;text-align:center;">
    <p>Bangladesh's one of the top rated crowdfunding sites</P>
	100% Secure, Reliable & Non Profit organization
    </p>
    </div>

    <form class="login-form" action="" method="POST">
        
        <input type="text" name="username" id="" placeholder="Name *" required>
        <input type="email" name="email" id="" placeholder="Email *" required>
        <input type="text" name="phone" id="" placeholder="Phone No *" required>
        <input type="password" name="password" id="" placeholder="Password *" required>
        <input style="background-color:blue;color:white;" class="input-button" type="submit" name="submit_signup" value="Sign Up" id="">
    </form>
    </div>
    <p style="text-align:center;">Go to<a href="donor-login.php"> Log In Page</a></p>
	<p style="text-align:center;">Copyrights@Shahriar Fahim_18-37534-1_Webtech_J</p></div>
</body>
</html>
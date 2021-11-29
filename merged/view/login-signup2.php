
<?php
session_start();
define("USERNAME","webtechJ");
define("PASSWORD", "1234");

if(isset($_POST['submit_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == USERNAME ){
        if($password == PASSWORD ){
            $_SESSION['login'] = "Login Successfull";
            // echo $_SESSION['login'];
            header("Location: index.php");
        }else{
            echo "<h3 style='text-align:center;color:green;'>Invalid Username or Password.<a style='color:red;text-decoration:none;border:1px solid red;margin-left:5px;padding:2px;' href=''>X</a></h3>";
        }
    }else{
        echo "<h3 style='text-align:center;color:green;'>Invalid Username or Password.<a style='color:red;text-decoration:none;border:1px solid red;margin-left:5px;padding:2px;' href=''>X</a></h3>";
    }
}

if(isset($_POST['submit_signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h3 style='text-align:center;color:green;'>Hello ".$username.". successfully Signed Up. Please use valid Login details.<a style='color:red;text-decoration:none;border:1px solid red;margin-left:5px;padding:2px;' href=''>X</a></h3>";
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

    <h3 align="right">
         
         <a href="Home.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp; 
         <a href="resources.html">Resources</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="past&presentEvents.html">Past & Present Events</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="charities.html">Charities</a>&nbsp;&nbsp;&nbsp;&nbsp;
         
            
     </h3>

     <br><br><br><br>


    <div>
        <div><h1 style="text-align:center;">Crowdfunding Website</h1>
    <p style="text-align:center;">Welcome Donor!</p></div>
    <br>
    <div style="width:410px;margin: auto;text-align:center;">
    <p>Bangladesh's one of the top rated crowdfunding sites</P>
	100% Secure, Reliable & Non Profit organization
    </p>
    </div>
    
    <form class="login-form" action="login-signup.php" method="POST">
        
        <input type="text" name="username" id="" placeholder="Username *" required>
        <input type="password" name="password" id="" placeholder="Password *" required>
        <input style="background-color:blue;color:white;" class="input-button" type="submit" name="submit_login" value="Log In" id="">
        <input style="background-color:lightblue;color:black;" class="input-button" type="submit" name="submit_signup" value="Sign Up" id="">
    </form>
    </div>
	<p style="text-align:center;">Copyrights@Shahriar Fahim_18-37534-1_Webtech_J</p></div>
</body>
</html>
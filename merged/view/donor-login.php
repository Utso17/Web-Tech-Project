

<?php
include("../model/donorDb.php");

// define("USERNAME","webtechJ");
// define("PASSWORD", "1234");

if(isset($_POST['submit_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query ="SELECT * from donors WHERE name='$username' ";
    $login_result = mysqli_query($con, $login_query);
    
  if(mysqli_num_rows($login_result) >0){
   $login_data_query ="SELECT * from donors WHERE name='$username' and password='$password' ";
   $login_data_result = mysqli_query($con, $login_data_query);

   if(mysqli_num_rows($login_data_result) >0){
       $_SESSION['login'] = 'Login Successful.';
       
      $user_data = mysqli_fetch_assoc($login_data_result);
       $_SESSION['username'] = $user_data['username'];
   header("Location: donor-home.php");
   }else{
       
    //    $_SESSION['wrong_pass'] = 
       echo "<span>Wrong Credentials. Please Check and Enter Correct Credentials.<a style='color:tomato;background-color:white;text-decoration:none;margin-left: 30px;padding-left:3px;padding-right:3px;' href='donor-login.php'>X</a></span>";
   }
  }else{ 
//    $_SESSION['not_signup'] =
   echo "<span>You are not Signed Up. Please Sign Up first. <a href='donor-sign-up.php'>Go to Sign Up Page to Sign Up.</a></span>";
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
    <p style="text-align:center;">Welcome Donor!</p></div>
    <br>
    <div style="width:410px;margin: auto;text-align:center;">
    <p>Bangladesh's one of the top rated crowdfunding sites</P>
	100% Secure, Reliable & Non Profit organization
    </p>
    </div>
    
    <form class="login-form" action="" method="POST">
        
        <input type="text" name="username" id="" placeholder="Username *" required>
        <input type="password" name="password" id="" placeholder="Password *" required>
        <input style="background-color:blue;color:white;" class="input-button" type="submit" name="submit_login" value="Log In" id="">
    </form>
    </div>
    <p style="text-align:center;">Go to<a href="donor-sign-up.php"> Sign Up Page</a></p>
	<p style="text-align:center;">Copyrights@Shahriar Fahim_18-37534-1_Webtech_J</p></div>
</body>
</html>
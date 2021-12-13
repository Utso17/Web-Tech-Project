<?php
session_start();
if(isset($_SESSION['login'])){

}else{
  header("location: login2.php");
}


if(isset($_POST['submit_invite'])){

    $email = $_POST['email'];
    echo "<h3 style='text-align:center;color:green;'>An Invitation Email Sent to ".$email." !!<a style='color:darkgreen;text-decoration:none;' href='home.php'>Go To Home</a></h3>";
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
      
    </style>
</head>

<body>

    
    <div>
        <h1 style="text-align:center;">Invite Friend</h1>

        <div class="payment-method">

            <form style="margin-top: 20px;" action="" method="POST">       
                <input type="email" name="email" id="" placeholder="Email *" required>
                <input class="submit" type="submit" name="submit_invite" id="" value="Invite" required>
            </form>
            <div>
                <img src="../Assets/images/invite.png"  alt="" height="300px" width="310px">
            </div>
        </div>
    </div>
    </div>
</body>

</html>
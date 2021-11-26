
<?php
session_start();

if(isset($_POST['submit_logout'])){
    session_unset();

}
if(isset($_SESSION['login'])){

}else{
  header("location: login-signup.php");
}

if(isset($_POST['submit_club'])){
    if(isset($_SESSION['clubname'])){unset($_SESSION['clubname']);}

    $clubname = $_POST['clubname'];
    $_SESSION['clubname'] = $clubname;
    header("location: subscribtion.php");
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
.top-navigation ul{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;

}
.top-navigation ul li{
    list-style-type: none;
    margin:10px;
    padding: 10px;
    background-color: lightskyblue;

}
.top-navigation li a{
    text-decoration: none;
}
.top-navigation li a:hover{
    color: tomato;
}

.choose-club{
    width: 80%;
    margin: auto;
    padding-left: 40px;
    padding-right: 40px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap
}
.individual-club{
    display: flex;
    flex-direction: column;
    margin: auto;
    padding: 7px;
}
.individual-club form{
    display: flex;
    flex-direction: column;
    margin: auto;
    padding: 7px;
}
.individual-club .submit-club{
    text-align: center;
    text-decoration: none;
    padding: 10px;
    border: 1px solid black;
}
.individual-club .submit-club:hover{
    background-color: tomato;
}

    </style>
</head>
<body>
    
<div class="top-navigation">
    <ul>
        <li><a href="history.php">Donation History</a></li>
        <li><a href="index.php">Choose a club</a></li>
        <li><a href="invite.php">Invite Friend</a></li>
        <li><form action="" method="POST"><input style="border:2px solid lightskyblue;background-color:lightskyblue;" type="submit" name="submit_logout" value="Log Out" id=""></form></li>
    </ul>
</div>

<div class="choose-club">
    <div class="individual-club">
        <img src="images/wildfare.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Wildfare Club">
            <input class="submit-club" type="submit" name="submit_club" value="Wildfare Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/kids.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Children Club">
            <input class="submit-club" type="submit" name="submit_club" value="Children Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/homeless.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Homeless Club">
            <input class="submit-club" type="submit" name="submit_club" value="Homeless Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/freedom.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Freedom Fighter Club">
            <input class="submit-club" type="submit" name="submit_club" value="Freedom Fighter Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/students.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Student Club">
            <input class="submit-club" type="submit" name="submit_club" value="Student Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/leader.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Leadership Club">
            <input class="submit-club" type="submit" name="submit_club" value="Leadership Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/business.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Business Club">
            <input class="submit-club" type="submit" name="submit_club" value="Business Club">
        </form>
    </div>
    <div class="individual-club">
        <img src="images/playground.png" alt="" height="180px" width="200px">
        <form action="" method="POST">
            <input style="visibility:hidden;" type="text" name="clubname" value="Playground Club">
            <input class="submit-club" type="submit" name="submit_club" value="Playground Club">
        </form>
    </div>
</div>
</body>
</html>
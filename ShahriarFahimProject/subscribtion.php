<?php
session_start();
if(isset($_SESSION['login'])){

}else{
  header("location: login-signup.php");
}

if(isset($_POST['submit_subscribtion'])){

    $subscribtion = $_POST['subscribtion'];
    $_SESSION['subscribtion'] = $subscribtion;
    if($subscribtion == 'free'){
        $_SESSION['donate_allow']= "YES";
        header("location: donate.php");
    }else{
        $_SESSION['paid_subscribtion'] = "YES";
        header("location: payment.php");
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        .top-navigation ul {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

        }

        .top-navigation ul li {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            background-color: lightskyblue;

        }

        .top-navigation li a {
            text-decoration: none;
        }

        .top-navigation li a:hover {
            color: tomato;
        }

        .choose-subscribtion {
            width: 60%;
            margin: auto;
            padding-left: 40px;
            padding-right: 40px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        /* .choose-subscribtion {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 7px;
        } */

        .choose-subscribtion form {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 7px;
        }

        .choose-subscribtion input{
            text-align: center;
            text-decoration: none;
            padding: 10px;
            border: 1px solid black;
        }

        .choose-subscribtion .submit:hover {
            background-color: tomato;
            cursor: pointer;
        }
        .radio-inline{
            height: 80px;
            font-size: 33px;
        }
    </style>
</head>

<body>


    <div>
        <h1 style="text-align:center;">Choose Your Subscribtion</h1>

        <div class="choose-subscribtion">
            <form action="" method="POST">
                <label class="radio-inline">
                    <input type="radio" name="subscribtion" value="free" required>
                    <span> FREE </span>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="subscribtion" value="paid" checked required>
                    <span> PAID </span>
                </label>
                <input class="submit" type="submit" name="submit_subscribtion" id="">
            </form>
        </div>
    </div>
    </div>
</body>

</html>
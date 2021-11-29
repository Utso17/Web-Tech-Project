<?php
session_start();
if(isset($_SESSION['login'])){

}else{
  header("location: donor-login.php");
}

if(isset($_SESSION['donate_allow'])  || isset($_SESSION['payment_done'])){

}else{
  header("location: donor-subscribtion.php");
}




if(isset($_POST['submit_donate'])){
 if(isset($_SESSION['donate_time'])){ unset($_SESSION['donate_time']);}
 if(isset($_SESSION['donate_amt'])){ unset($_SESSION['donate_amt']);}
 if(isset($_SESSION['donate_type'])){ unset($_SESSION['donate_type']);}
    $amt = $_POST['donate-amt'];
    $donate_type = $_POST['donate-type'];
    $_SESSION['donate_time']= date('Y-d-m');
    $_SESSION['donate_amt'] =$amt;
    if($donate_type === "One time"){
           $_SESSION['donate_type'] ="One Time";
            echo "<h3 style='text-align:center;color:green;'>DONATION SUCCESSFULL !!<a style='color:darkgreen;text-decoration:none;' href='donor-home.php'>Go To Home</a></h3>";
    }else{
        $_SESSION['donate_type'] = "Recurring";
         echo "<h3 style='text-align:center;color:green;'>DONATION SUCCESSFULL !!<a style='color:darkgreen;text-decoration:none;' href='donor-home.php'>Go To Home</a></h3>";
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
        <h1 style="text-align:center;">Donate</h1>

        <div class="choose-subscribtion">
            <form action="" method="POST">
                <input type="number" name="donate-amt" id="" min="50" placeholder="Donate (min 50BDT)" required>
                <label class="radio-inline">
                    <input type="radio" name="donate-type" value="One time" required>
                    <span> ONE TIME </span>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="donate-type" value="Recurring" checked required>
                    <span> RECURRING </span>
                </label>
                <input class="submit" type="submit" name="submit_donate" id="">
            </form>
        </div>
    </div>
    </div>
</body>

</html>
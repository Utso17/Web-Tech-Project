<?php
session_start();
if(isset($_SESSION['login'])){

}else{
  header("location: login.php");
}

if(isset($_SESSION['donate_allow']) || isset($_SESSION['paid_subscribtion'])){

}else{
  header("location: subscribtion.php");
}


if(isset($_POST['submit_mobile'])  ||isset($_POST['submit_card']) ){

    $mobile = $_POST['mobile'];
    $_SESSION['payment_done'] ="YES";
    header('location: donate.php');
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
        <h1 style="text-align:center;">Choose Payment Method</h1>

        <div class="payment-method">
            <form action="" method="POST">
                <h2>Mobile Banking</h2>
                <p style="margin-bottom: 10px;color:blue;">Please make payment to 01XXXXXXXXXX and write your mobile number and last 2 digits of transaction ID.</p>
                <input style="width:130px;" type="text" pattern="\d*" name="mobile" id="" placeholder="Mobile No *" minlength="10" maxlength="11" required>
                <input style="width:130px;" type="text" pattern="\d*" name="mobile" id="" placeholder="LAST 2 OF TRNIX" minlength="2" maxlength="2" step="2" required>
                <input class="submit" type="submit" name="submit_mobile" id="" value="Proceed" required>
            </form>

            <form style="margin-top: 20px;" action="" method="POST">
                <h2>Pay Through Card</h2>
               <label> Credit Card No <input style="width:140px;" type="text" pattern="\d*" name="card" id="" placeholder="Card No *" minlength="16" maxlength="16" required></label>
              <label>  Expiry Date <input type="text" pattern="\d*" name="month" id="" minlength="2" maxlength="2"  placeholder="Month"> <input type="text" pattern="\d*" name="year" id="" minlength="4" maxlength="4" placeholder="Year (yyyy)" required> </label>
               <label>CVV <input type="text" pattern="\d*" name="cvv" id="" minlength="3" maxlength="3" placeholder="CVV*"  required></label>
                <input class="submit" type="submit" name="submit_card" id="" value="Proceed" required>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
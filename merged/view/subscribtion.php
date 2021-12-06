<?php
session_start();
if (isset($_SESSION['login'])) {
} else {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowdfunding Website</title>
    <link rel="stylesheet" href="../node_modules/toastr/build/toastr.min.css">

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

        .choose-subscribtion input {
            text-align: center;
            text-decoration: none;
            padding: 10px;
            border: 1px solid black;
        }

        .choose-subscribtion .submit:hover {
            background-color: tomato;
            cursor: pointer;
        }

        .radio-inline {
            height: 80px;
            font-size: 33px;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">Choose Your Subscribtion</h1>
    <div class="choose-subscribtion">
        <form action="" method="POST">
            <label class="radio-inline">
                <input type="radio" name="subscribtion" id="free" value="free">
                <span> FREE </span>
            </label>
            <label class="radio-inline">
                <input type="radio" name="subscribtion" id="paid" value="paid" checked>
                <span> PAID </span>
            </label>
        </form>
        <div>
            <input type="number" name="donate-amt" id="amt" min="50" placeholder="Donate (min 50BDT)" required>
        </div>
    </div>
    <div id="free-div">
        <div class="choose-subscribtion">
            <form action="" method="POST">
                <label class="radio-inline">
                    <input type="radio" name="donate-type" id="OneTime" value="One time">
                    <span> ONE TIME </span>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="donate-type" id="Recurring" value="Recurring" checked>
                    <span> RECURRING </span>
                </label>
                <input class="submit" type="button" value="Submit" name="submit_donate" id="btn-free">
            </form>
        </div>
    </div>
    <div id="paid-div">
        <div>
            <label for="mobile-banking">
                <input type="radio" name="paid-type" id="mobile-banking">
                Mobile Banking
            </label>
            <label for="pay-card">
                <input type="radio" name="paid-type" id="pay-card">
                Pay throught Card
            </label>
        </div>
        <div id="mobile-bank-div" class="payment-method">
            <form action="" method="POST">
                <h2>Mobile Banking</h2>
                <p style="margin-bottom: 10px;color:blue;">Please make payment to 01XXXXXXXXXX and write your mobile number and last 2 digits of transaction ID.</p>
                <input style="width:130px;" type="number" pattern="\d*" name="mobile" id="mobile-no" placeholder="Mobile No *" minlength="10" maxlength="11" required>
                <input style="width:130px;" type="number" pattern="\d*" name="mobile" id="trnix" placeholder="LAST 2 OF TRNIX" minlength="2" maxlength="2" step="2" required>
                <input class="submit" type="button" id="btn-mobile" name="submit_mobile" id="" value="Proceed" required>
            </form>
        </div>
        <div id="pay-card-div">
            <form style="margin-top: 20px;" action="" method="POST">
                <h2>Pay Through Card</h2>
                <label> Credit Card No <input style="width:140px;" type="text" pattern="\d*" name="card" id="CreditCard" placeholder="Card No *" minlength="16" maxlength="16" required></label>
                <label> Expiry Date <input type="text" pattern="\d*" name="month" id="ExpiryMonth" minlength="2" maxlength="2" placeholder="Month">
                    <input type="text" pattern="\d*" name="year" id="ExpiryYear" minlength="4" maxlength="4" placeholder="Year (yyyy)" required> </label>
                <label>CVV <input type="text" pattern="\d*" name="cvv" id="CVV" minlength="3" maxlength="3" placeholder="CVV*" required></label>
                <input class="submit" type="button" id="btn-card" name="submit_card" id="" value="Proceed" required>
            </form>
        </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/mdb-ui-kit/js/mdb.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            HideShow(0);
            HideShowPayment(0);
            $('#paid').trigger("change");
        });
        $('#paid').change(() => {
            if ($('#paid').is(":checked") == true) {
                HideShow(2);
            }
        });
        $('#free').change(() => {
            if ($('#free').is(":checked") == true) {
                HideShow(1);
            }
        });

        function HideShow(vValue) {
            if (vValue == 0) {
                $('#free-div').hide();
                $('#paid-div').hide();
            } else if (vValue == 1) //---- Show Free and Hide Paid
            {
                $('#free-div').show();
                $('#paid-div').hide();
            } else if (vValue == 2) //---- Show Paid and Hide Free
            {
                $('#free-div').hide();
                $('#paid-div').show();
            }
        }
        $('#mobile-banking').change(() => {
            if ($('#mobile-banking').is(":checked") == true) {
                HideShowPayment(1);
            }
        });
        $('#pay-card').change(() => {
            if ($('#pay-card').is(":checked") == true) {
                HideShowPayment(2);
            }
        });

        function HideShowPayment(vValue) {
            if (vValue == 1) {
                $('#mobile-bank-div').show();
                $('#pay-card-div').hide();
            } else if (vValue == 2) {
                $('#mobile-bank-div').hide();
                $('#pay-card-div').show();
            } else {
                $('#mobile-bank-div').hide();
                $('#pay-card-div').hide();
            }
        }
        $('#btn-mobile').click(() => {
            var vCheck = true,
                vMsg = "";
            if ($('#mobile-no').val() == null || $('#mobile-no').val() == "") {
                vCheck = false;
                vMsg += "Mobile No <br />";
            }
            if ($('#trnix').val() == null || $('#trnix').val() == "") {
                vCheck = false;
                vMsg += "Trnix <br />";
            }
            if ($('#amt').val() == null || $('#amt').val() == "") {
                vCheck = false;
                vMsg += "Amount <br />";
            }
            if (!vCheck) {
                LoadAlert("error", "Provide the Following", vMsg);
                return;
            }
            $.ajax({
                url: "subJS.php",
                type: "POST",
                data: {
                    DonationType: "Paid",
                    PaidType: "Mobile",
                    MobileNo: $('#mobile-no').val(),
                    Trnix: $('#trnix').val(),
                    Money: $('#amt').val()
                },
                success: (response) => {
                    console.log(response);
                    if (response.status == "success") {
                        LoadAlert("success", "Success", response.msg);
                    } else if (response.status == "error") {
                        LoadAlert("error", "Error", response.msg);
                    }
                },
                error: (response) => {
                    console.log(response);
                    LoadAlert("error", "Error", "Server Error");
                }
            });
        });
        $('#btn-card').click(() => {
            var vCheck = true,
                vMsg = "";
            if ($('#CreditCard').val() == null || $('#CreditCard').val() == "") {
                vCheck = false;
                vMsg += "Credit Card <br />";
            }
            if ($('#ExpiryMonth').val() == null || $('#ExpiryMonth').val() == "") {
                vCheck = false;
                vMsg += "Expiry Month <br />";
            }

            if ($('#ExpiryYear').val() == null || $('#ExpiryYear').val() == "") {
                vCheck = false;
                vMsg += "Expiry Year <br />";
            }
            if ($('#CVV').val() == null || $('#CVV').val() == "") {
                vCheck = false;
                vMsg += "CVV <br />";
            }
            if ($('#amt').val() == null || $('#amt').val() == "") {
                vCheck = false;
                vMsg += "Amount <br />";
            }
            if (!vCheck) {
                LoadAlert("error", "Provide the Following", vMsg);
                return;
            }
            $.ajax({
                url: "subJS.php",
                type: "POST",
                data: {
                    DonationType: "Paid",
                    PaidType: "Card",
                    CreditCard: $('#CreditCard').val(),
                    ExpiryMonth: $('#ExpiryMonth').val(),
                    ExpiryYear: $('#ExpiryYear').val(),
                    CVV: $('#CVV').val(),
                    Money: $('#amt').val()
                },
                success: (response) => {
                    console.log(response);
                    if (response.status == "success") {
                        LoadAlert("success", "Success", response.msg);
                    } else if (response.status == "error") {
                        LoadAlert("error", "Error", response.msg);
                    }
                },
                error: (response) => {
                    console.log(response);
                    LoadAlert("error", "Error", "Server Error");
                }
            });
        });
        $('#btn-free').click(() => {
            var FreeType = "";
            var vCheck = true,
                vMsg = "";
            if ($('#amt').val() == null || $('#amt').val() == "") {
                vCheck = false;
                vMsg += "Amount <br />";
            }
            if (!vCheck) {
                LoadAlert("error", "Provide the Following", vMsg);
                return;
            }
            if ($('#OneTime').is(":checked")) {
                FreeType = "One Time";
            }
            if ($('#Recurring').is(":checked")) {
                FreeType = "Recurring";
            }
            $.ajax({
                url: "subJS.php",
                type: "POST",
                data: {
                    DonationType: "Free",
                    FreeType: FreeType,
                    Money: $('#amt').val()
                },
                success: (response) => {
                    console.log(response);
                    if (response.status == "success") {
                        LoadAlert("success", "Success", response.msg);
                    } else if (response.status == "error") {
                        LoadAlert("error", "Error", response.msg);
                    }
                },
                error: (response) => {
                    console.log(response);
                    LoadAlert("error", "Error", "Server Error");
                }
            });
        });

        function LoadAlert(type, title, msg) {
            toastr[type](msg, title);

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        }
    </script>
</body>

</html>
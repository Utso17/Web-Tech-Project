<?php
include("../model/connection.php");
if (isset($_SESSION['login'])) {
} else {
    header("location: login2.php");
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

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }

        table th,
        td {
            text-align: center;
            width: 100px;
            height: 40px;
            border: 1px solid black;
        }

        .text-custom {
            padding: 10px 15px;
            border: 2px solid black;
            border-radius: 30px;
            width: 55%;
            margin: 17px 0px;
        }
    </style>
</head>

<body>
    <div class="top-navigation">
        <ul>
            <li><a href="history.php">Donation History</a></li>
            <li><a href="home2.php">Choose a club</a></li>
            <li><a href="invite.php">Invite Friend</a></li>
        </ul>
    </div>


    <div>
        <h1 style="text-align:center;">Donation History</h1>
        <div style="text-align:center">
            <input type="text" class="text-custom" id="txt-search" placeholder="Search">
            <button type="button" id="btn-search">Search</button>
        </div>
        <table>
            <thead>
                <th>Club</th>
                <th>AMOUNT</th>
                <th>TYPE</th>
            </thead>
            <tbody id="donate-body">

            </tbody>
        </table>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/mdb-ui-kit/js/mdb.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            GetTable("");
        });
        $('#btn-search').click(function() {
            if ($('#txt-search').val() == null) return;
            GetTable($('#txt-search').val());
        });

        function GetTable(vValue) {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                var response = JSON.parse(this.responseText);
                if (response.status == "success") {
                    $('#donate-body').empty();
                    $('#donate-body').append(response.msg);
                } else if (response.status == "error") {
                    $('#donate-body').empty();
                    $('#donate-body').append(response.msg);
                }
            }
            xhttp.open("GET", "historyJS.php?Search=" + vValue);
            xhttp.send();
        }

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
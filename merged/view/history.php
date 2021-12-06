<?php
include("../Model/connection.php");
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
    </style>
</head>

<body>
    <div class="top-navigation">
        <ul>
            <li><a href="history.php">Donation History</a></li>
            <li><a href="home.php">Choose a club</a></li>
            <li><a href="invite.php">Invite Friend</a></li>
        </ul>
    </div>


    <div>
        <h1 style="text-align:center;">Donation History</h1>

        <table>
            <thead>
                <tr>
                    <th>Club</th>
                    <th>AMOUNT</th>
                    <th>TYPE</th>
                </tr>
            </thead>
            <tbody id="donate-body">
                <?php
                $vQuery = "SELECT * FROM subscription WHERE donor_id = " . $_SESSION["username"]["id"];
                $Result = mysqli_query($con, $vQuery);
                if (mysqli_num_rows($Result) > 0) {
                    while ($Data = mysqli_fetch_assoc($Result)) {
                        $DonationType = ($Data["donation_type"] == "Paid") ? $Data["paid_type"] : $Data["free_type"];
                        $Amount = $Data["money"] != null ? $Data["money"] : 0;


                        $html = "<tr>";
                        $html .= "<td>" . $Data["club_name"] . "</td>";
                        $html .= "<td>" . $Amount . "</td>";
                        $html .= "<td>" . $DonationType . "</td>";
                        $html .= "</tr>";
                        echo $html;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/mdb-ui-kit/js/mdb.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
</body>

</html>
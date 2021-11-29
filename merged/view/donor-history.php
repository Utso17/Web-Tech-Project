<?php
session_start();
if(isset($_SESSION['login'])){

}else{
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

       table{
           width: 80%;
           margin: auto;
           border-collapse: collapse;
       }
       table th, td{
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
        <li><a href="donor-history.php">Donation History</a></li>
        <li><a href="donor-home.php">Choose a club</a></li>
        <li><a href="donor-invite.php">Invite Friend</a></li>
    </ul>
</div>


    <div>
        <h1 style="text-align:center;">Donation History</h1>
        
        <table>
            <tr>
                <th>Club</th>
                <th>AMOUNT</th>
                <th>TYPE</th>
            </tr>
            <tr>
                <td><?php if(isset($_SESSION['clubname'])){ echo $_SESSION['clubname']; }else{ echo "NILL"; }?></td>
                <td><?php if(isset($_SESSION['donate_amt'])){ echo $_SESSION['donate_amt']; }else{ echo "NILL"; }?></td>
                <td><?php if(isset($_SESSION['donate_type'])){ echo $_SESSION['donate_type']; }else{ echo "NILL"; }?></td>
            </tr>
        </table>

       
    </div>
</body>

</html>
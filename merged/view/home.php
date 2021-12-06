<?php
session_start();
if (isset($_POST['submit_logout'])) {
    session_unset();
}


if (isset($_SESSION['login'])) {
} else {
    header("location: login.php");
}



if (isset($_POST['submit_club'])) {

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
    <link rel="stylesheet" href="../node_modules/mdb-ui-kit/css/mdb.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
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

        .choose-club {
            width: 80%;
            margin: auto;
            padding-left: 40px;
            padding-right: 40px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .individual-club {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 7px;
        }

        .individual-club form {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 7px;
        }

        .individual-club .submit-club {
            text-align: center;
            text-decoration: none;
            padding: 10px;
            border: 1px solid black;
        }

        .individual-club .submit-club:hover {
            background-color: tomato;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand me-2" href="home.php">
                    Crowdfunding Webstie
                </a>

                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="history.php">Donation History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Choose a Club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="invite.php">Invite Friends</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-primary px-3" href="logoutJS.php" role="button">Log out</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="col-md-10 m-auto d-block mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/wildfare.png" class="m-auto d-block" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Wildfare Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Wildfare Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/kids.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Children Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Children Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/homeless.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Homeless Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Homeless Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/freedom.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Freedom Fighter Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Freedom Fighter Club">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/students.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Student Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Student Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/leader.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Leadership Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Leadership Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/business.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Business Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Business Club">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="../Assets/images/playground.png" alt="" height="180px" width="200px">
                        <form action="" method="POST">
                            <input style="visibility:hidden;" type="text" name="clubname" value="Playground Club">
                            <input class="text-center btn btn-primary" type="submit" name="submit_club" value="Playground Club">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/mdb-ui-kit/js/mdb.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
</body>

</html>
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
    </style>
</head>

<body>
    <div class="col-md-12">
        <h1 class="text-center">Crowdfunding Website</h1>
        <h5 class="text-center">Welcome Donor!</h5>
        <div class="text-center">
            <p>Bangladesh's one of the top rated crowdfunding sites <br />
                100% Secure, Reliable & Non Profit organization
            </p>
        </div>
        <div class="col-md-3 m-auto d-block">
            <form class="login-form" id="login-form">
                <div class="form-body">
                    <div class="form-outline">
                        <input type="text" name="username" id="username" class="form-control" />
                        <label class="form-label" for="username">User Name</label>
                    </div>
                    <div class="form-outline mt-3">
                        <input type="password" name="password" id="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary btn-block" name="submit_login" id="btn-login" type="button">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <p class="text-center mt-3">or</p>
    <div class="text-center">
        <a href="sign-up.php" class="btn btn-primary col-md-3">Sign up</a>
    </div>
    <p style="text-align:center;">Copyrights@Shahriar Fahim_18-37534-1_Webtech_J</p>
    </div>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/mdb-ui-kit/js/mdb.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            $('#login-form').trigger('reset');
        });
        $('#btn-login').click(() => {
            var vCheck = true,
                vMsg = "";
            if ($('#username').val() == null || $('#username').val() == "") {
                vCheck = false, vMsg += "Provide User Name <br/>";
            }
            if ($('#password').val() == null || $('#password').val() == "") {
                vCheck = false, vMsg += "Provide Password";
            }
            if (!vCheck) {
                LoadAlert("error", "Invalid", vMsg);
                return;
            }
            $('#btn-login').html('Please Wait <i class="fa fa-spinner fa-spin"></i>');
            const xhttp = new XMLHttpRequest();

            var string = "username=" + $('#username').val();
            string += "&password=" + $('#password').val();

            xhttp.onload = function() {
                console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                if (response.status == "success") {
                    LoadAlert("success", "Success", response.msg);
                    setTimeout(() => {
                        window.location.href = "home2.php";
                    }, 1000);
                    $('#login-form').trigger('reset');
                } else if (response.status == "error") {
                    LoadAlert("error", "Error", response.msg);
                }
                $('#btn-login').html('Login');
            }
            xhttp.open("POST", "loginJS.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(string);


            /* $.ajax({
                url: "loginJS.php",
                type: "POST",
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
                },
                success: (response) => {
                    console.log(response);
                    if (response.status == "success") {
                        console.log("Success");
                        LoadAlert("success", "", response.msg);
                        
                    } else if (response.status == "error") {
                        LoadAlert("error", "Error", response.msg);
                    }

                },
                error: (response) => {
                    LoadAlert("error", "Error", "Server Error");
                }
            }); */
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
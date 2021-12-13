<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../node_modules/toastr/build/toastr.min.css">

    <style>
        .custom-txt {
            padding: 8px 15px;
            border: 3px solid black;
            border-radius: 30px;
            margin: 17px 0px;
        }

        .custom-btn {
            color: white;
            background-color: black;
            border-radius: 30px;
            padding: 15px 0px;
            width: 134px;
        }

        .custom-btn:hover {
            color: black;
            background-color: white;
            border: 1px solid black;
            border-radius: 30px;
            padding: 15px 0px;
            width: 134px;
        }

        .img-cover {
            width: 250px;
            max-width: 100%;
            border-radius: 30px;
            border: 2px solid black;
            height: 210px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Profile</h1>
    <form>
        <?php
        include("../Model/connection.php");
        $vQuery = "SELECT * FROM donors WHERE id = " . $_SESSION["username"]["id"];
        $Result = mysqli_query($con, $vQuery);
        $html = "";
        if (mysqli_num_rows($Result) > 0) {
            while ($Data = mysqli_fetch_assoc($Result)) {
        ?>
                <div>
                    <label for="Name">Name</label>
                    <input class="custom-txt" type="text" id="Name" value="<?= $Data["name"]; ?>" placeholder="Name">
                </div>
                <div>
                    <label for="Email">Email</label>
                    <input class="custom-txt" type="email" id="Email" value="<?= $Data["email"]; ?>" placeholder="Email">
                </div>
                <div>
                    <label for="Phone">Phone</label>
                    <input class="custom-txt" type="text" id="Phone" placeholder="Phone" value="<?= $Data["phone"]; ?>">
                </div>
                <div>
                    <label for="file">Image</label>
                    <input type="file" id="file" class="custom-txt">
                </div>
                </div>
                <div>
                    <img class="img-cover" src="upload/<?= $_SESSION["username"]["id"] ?>.jpg">
                </div>
        <?php
            }
        }
        ?>
        <div>
            <button class="custom-btn" type="button" onclick="UpdateProfile()">Update</button>
        </div>
    </form>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/toastr/build/toastr.min.js"></script>
    <script type="text/javascript">
        function UpdateProfile() {
            var img = document.getElementById("file");

            var formData = new FormData();
            formData.append("Name", $('#Name').val());
            formData.append("Email", $('#Email').val());
            formData.append("Phone", $('#Phone').val());
            formData.append("Image", img.files[0]);

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                if (response.status == "success") {
                    LoadAlert("success", "Success", response.msg);
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else if (response.status == "error") {
                    LoadAlert("error", "Error", response.msg);
                }
            }
            xhttp.open("POST", "UpdateProfileJS.php");
            xhttp.send(formData);
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
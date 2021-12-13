
<?php
include("../model/connection.php");

$response = array();
try {
    $vCheck = true;
    if (empty($_POST["Name"])) {
        $vCheck = false;
    }
    if (empty($_POST["Name"])) {
        $vCheck = false;
    }
    if (empty($_POST["Name"])) {
        $vCheck = false;
    }
    if ($vCheck) {

        $login_data_query = "UPDATE `donors` SET `name`='" . $_POST["Name"] . "',
    `email`='" . $_POST["Email"] . "',`phone`='" . $_POST["Phone"] . "'
    WHERE id = " . $_SESSION["username"]["id"]; //`password`='[value-5]'

        $Result = mysqli_query($con, $login_data_query);
        if ($Result) {
            $response["status"] = "success";
            $response["msg"] = "Profile Updated";

            if (isset($_FILES["Image"])) {
                move_uploaded_file($_FILES["Image"]["tmp_name"], "upload/" . $_SESSION["username"]["id"] . ".jpg");
            }
        } else {
            $response["status"] = "error";
            $response["msg"] = mysqli_error($con);
        }
    }
} catch (Exception $ex) {
    $response["status"] = "error";
    $response["msg"] = $ex->getMessage();
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

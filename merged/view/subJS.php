<?php
include("../Model/connection.php");
$response = array();
try {
    $vQuery = "";
    $DonationType = $_POST["DonationType"];
    $DonorID = $_SESSION["username"]["id"];
    $ClubName = $_SESSION['clubname'];


    if ($DonationType == "Paid") {
        $PaidType = $_POST["PaidType"];
        if ($PaidType == "Mobile") { //---- Paid throught Mobile Banking
            $vQuery = "INSERT INTO `subscription`(`donor_id`, `club_name` , `donation_type`, `paid_type`, `mobile_no`, `trnix`, `money`) 
            VALUES ($DonorID, '$ClubName' ,'$DonationType', '$PaidType' , '" . $_POST['MobileNo'] . "','" . $_POST['Trnix'] . "', '" . $_POST['Money'] . "')";
        } else if ($PaidType == "Card") { //---- Paid throught Credit Card
            $vQuery = "INSERT INTO `subscription`(`donor_id`, `club_name`, `donation_type`, `paid_type`, `credit_card_no`, `expiry_month`, `expiry_year`, `cvv`, `money`)  
            VALUES ($DonorID, '$ClubName' ,'$DonationType','$PaidType' ,'" . $_POST['CreditCard'] . "','" . $_POST['ExpiryMonth'] . "', '" . $_POST['ExpiryYear'] . "', '" . $_POST['CVV'] . "', '" . $_POST['Money'] . "')";
        }
    } else {
        $vQuery = "INSERT INTO `subscription`(`donor_id`, `club_name`, `donation_type`, `free_type`, `money`) 
        VALUES ($DonorID, '$ClubName' ,'$DonationType','" . $_POST['FreeType'] . "', '" . $_POST['Money'] . "')";
    }

    if (mysqli_query($con, $vQuery)) {
        $response["status"] = "success";
        $response["msg"] = "Thank you for donating";
    } else {
        $response["status"] = "error";
        $response["msg"] = "Please Try Again, something went wrong";
    }
} catch (Exception $ex) {
    $response["status"] = "error";
    $response["msg"] = $ex->getMessage();
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

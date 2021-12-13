<?php
include("../model/connection.php");
$response = array();
try {
    $Search = "";
    if (!empty($_GET["Search"])) {
        $Search = " AND (club_name LIKE '%" . $_GET["Search"] . "%')";
    }

    $vQuery = "SELECT * FROM subscription WHERE 1=1 AND donor_id = " . $_SESSION["username"]["id"] . $Search;
    $Result = mysqli_query($con, $vQuery);
    $html = "";
    if (mysqli_num_rows($Result) > 0) {

        while ($Data = mysqli_fetch_assoc($Result)) {
            $DonationType = ($Data["donation_type"] == "Paid") ? $Data["paid_type"] : $Data["free_type"];
            $Amount = $Data["money"] != null ? $Data["money"] : 0;
            $html .= "<tr>";
            $html .= "<td>" . $Data["club_name"] . "</td>";
            $html .= "<td>" . $Amount . "</td>";
            $html .= "<td>" . $DonationType . "</td>";
            $html .= "</tr>";
        }
        $response["status"] = "success";
        $response["msg"] = $html;
    } else {
        $response["status"] = "error";
        $response["msg"] = "<tr><td colspan='2'>Result not found<td></tr>";
    }
} catch (Exception $ex) {
    $response["status"] = "error";
    $response["msg"] = "<tr><td colspan='2'>" + $ex->getMessage() + "<td></tr>";
}
//$response["search"] = $vQuery;
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

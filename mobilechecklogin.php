<?php
include 'predefiner.php';
$feedcontent = array();

$email = $_POST['email'];
$password = $_POST['password'];

 $sql = "SELECT pcc_accountid FROM `philam_client_credentials` WHERE pcc_email ='".$email."' and pcc_password = (select md5('".$password."'))";
$info = "";
try {
$result = mysqli_query($conn, $sql);
        $info = "true";
} catch (Exception $e) {
    $info= "Invalid Transaction!".$e.intl_get_error_message();
}
echo($sql);
?> 
<?php

require('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$sum=$_SESSION['sum'];

$query3=mysqli_query($con, "SELECT * FROM users WHERE emp_number='$emp_no'");
$row3 = mysqli_fetch_array($query3);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("",
                  ""));
$payload = Array(
    'purpose' => 'Swimming Pool Pass ',
    'amount' => $sum,
    'phone' => '',
    'buyer_name' => $row3['emp_fname'].$row3['emp_lname'],
    'redirect_url' => 'http://localhost/dbms/redirect.php',
    'send_email' => FALSE,
    'webhook' => '',
    'send_sms' => true,
    'email' => '',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);


$json_decode=json_decode($response,true);

$long_url=$json_decode['payment_request']['longurl'];
header("Location: $long_url");

?>

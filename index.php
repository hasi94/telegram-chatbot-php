<?php
var_dump('hit'); die;
$path = "https://api.telegram.org/bot1477242844:AAEnliAp5u8r31HuD9guaLVZKexhYpUZ2ZU";
$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 if($message){
 file_get_contents($path."/sendmessage?chat_id=".$chatId."under construction");
 }
?>

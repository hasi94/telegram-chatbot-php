<?php
$path = "https://api.telegram.org/bot1477242844:AAEnliAp5u8r31HuD9guaLVZKexhYpUZ2ZU";

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/weather") === 0) {
$location = substr($message, 9);
$weather = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$location."&appid=67a7e4817e651523c627a9fd205cc0dc
"), TRUE)["weather"][0]["main"];
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in ".$location.": ". $weather);
}
?>

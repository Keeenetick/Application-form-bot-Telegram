<?php



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$token = "YOUR TOKEN";
$chat_id = "YOUR CHAT ID";

$arr = array(
    "Имя пользователя:" => $name,
    "E-mail:"=>$email,
    "Телефон:"=>$phone
);

foreach($arr as $key=>$value){
    $txt .="<b>".$key."</b>".$value. "%0A";
}
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "535554115:AAHoBWJZoPd_PntKIZEQ23-cF5k4xm1AvYs";
$chat_id = "-266280036";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>

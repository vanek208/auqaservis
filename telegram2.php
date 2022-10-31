<?php
session_start();
require_once 'db.php';

$name = $_POST['name'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$kom = $_POST['kom'];
$token = "5771016082:AAEtShiD5UPArXESQy6Hi3GLzdOB-GklzPo";
$chat_id = "-877607754";
$date_n = date("d M Y H:i:s");
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $tele,
  'Емайл' => $email,
  'Комментарий:' => $kom,
  'Дата:' => $date_n
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: main.php');
} else {
  echo "Error";
}

?>
<?php
session_start();
require_once 'db.php';

$name = $_POST['name'];
$telefon = $_POST['telefon'];
$kom = $_POST['komm'];
$token = "5433015325:AAHIxjFhLOqlc9MBjF73U6uIyZ9x0QJwGMo";
$chat_id = "-877607754";
$date_n = date("d M Y H:i:s");
$site = "AquaServis";
$arr = array(
  'Заказ с сайта:' => $site,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $telefon,
  'Комментарий:' => $kom,
  'Дата:' => $date_n
);
$check=$mysql -> query ("INSERT INTO `zayavki` (`id`,`name`,`telefon`,`kommentariy`) values('', '$name','$telefon','$kom') ");

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
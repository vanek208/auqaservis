
<?php
    if (!empty($_POST)) { //если нажали кнопку отправить
        $fname_u = $_POST['fname']; //создаем переменные для отправки
        $email_u = $_POST['email'];
        $message_u = $_POST['message'];
        $message = "От ".$fname_u." <".$email_u.">\Отзыв:".$message_u."/Дата: ".date("j M Y")."/Время: ".date("h:i")."."; //сообщение будет выглядеть так: От ИМЯ <email@mail.ru>/Отзыв: текст отзыва/Дата: число отправки/Время: время отправки.
        mail('ваша почта@mail.ru', 'Отзыв с сайта site.ru', $message); //сама функция отправки почты
        echo "Сообщение успешно отправлено, спасибо";//если сообщение отправлено успешно, то выходит это сообщение
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"><!--Создаем форму-->
    <input type="text" placeholder="Имя" name="fname" /><!--Создаем строку для ввода имени-->
    <input type="email" placeholder="E-mail" name="email" /><!--Создаем строку для ввода e-mail (пригодится для ответа)-->
    <textarea placeholder="Сообщение" name="message" rows="10" cols="45"></textarea><!--Поле для ввода сообщения-->
    <input type="submit" value="Отправить" /><!--Кнопка отправить-->
</form>

</body>

</html>
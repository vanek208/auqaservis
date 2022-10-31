<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/style/kabinet.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кабинет</title>
</head>
<body>

<header>
<div id="kabinet"><a href="kabinet.php">Личный кабинет </a></div>
	 <div id="servic"><a href="servic.php">Сервисы</a></div>
	 <div id="servic1">
    <p class="profile"><img src="/img/main.png" alt=""><? echo $_SESSION['logged_user']->login;?></p>
    <a href="logout.php"><p  class="profile"href="/logout.php"><img src="/img/exit.png" alt=""></p></a>      
	</div>
</header>

	<div class="dp1">Весь функционал административной панели</div>

	<div class="pr">
	<a href="online_users.php"><img src="/img/4.png" style="width:150px;" alt=""></a>
	<p>Администрация</p>
	</div>
	<div class="pr1">
	<a href="sendtg.php"><img src="/img/1.png" style="width:150px;" alt=""></a>
	<p>Отправить обращение в телеграм</p>
	</div>
	<div class="pr2">
	<a href="logivk.php"><img src="/img/2.png" style="width:150px;" alt=""></a>
	<p>Посмотреть запросы из ВК</p>
	</div>
	<div class="pr3">
	<a href="activeusers.php"><img src="/img/149452.png" style="width:150px;" alt=""></a>
	<p>Пользователи</p>
	</div>
	<div class="pr4">
	<a href="work.php"><img src="/img/5.jpg" style="width:150px;" alt=""></a>
	<p>Посмотреть кворк</p>
	</div>
	<div class="pr5">
	<a href="index1.php"><img src="/img/6.jpg" style="width:200px;" alt=""></a>
	<p>Посмотреть статистику</p>
	</div>
	<div class="pr6">
	<a href="logsk.php"><img src="/img/7.jpg" style="width:200px;" alt=""></a>
	<p>Посмотреть логи кворка</p>
	</div>
	<div class="pr7">
	<a href="hystory.php"><img src="/img/8.jpg" style="width:200px;" alt=""></a>
	<p>База данных</p>
	</div>

</body>
</html>
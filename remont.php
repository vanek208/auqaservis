<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/adapt.css">
	<title>Document</title>
</head>
<body>
<header >
		
		<div class="tele">
		<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:15px;" alt=""> +7(999)888-77-66</a>
		<li class="ss">
		<a href="kabinet.php"><img src="/image/4.png" style="width:18px;" alt=""> Консультация </a>
		</li>
		<li class="ss">
		<a href="kabinet.php"><img src="/image/3.png" style="width:19px;" alt=""> Оставить заявку </a>
		</li>
		</div>
		<div class="line"></div>
		<div class="menu">
		<a href="main.php"><img src="/image/logo.png" style="width:250px; padding-right:150px" alt=""></a>
		<div id="ssilki">
		<li class="ss">
		<a href="main.php">Главная </a>
		</li>
		<li class="ss">
		<a href="uslugi.php">Услуги </a>
		</li>
		<li class="ss">
		<a href="akciya.php">Акции </a>
		</li>
		<li class="ss">
		<a href="otzivi.php">Отзывы </a>
		</li>
		<li class="ss">
		<a href="kontakti.php">Контакты </a>
		</li>
		<li class="ss">
		<a href="lichkabinet.php">Личный кабинет </a>
		</li>
		</div>    
</div>
</header>
<img src="/image/40.png" style="width:100%; height: 250px; padding-top:40px" alt="">
<div class="nasos">
<p>Ремонт и установка бытовой техники</p>
</div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Выберите вид техники</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Холодильник</a>
    <a href="#">Телевизор</a>
    <a href="#">Стиральная машина</a>
  </div>
</div>
<div class="uslugii2">
	<p>По всем вопросам звоните по телефону <a href="tel:+79998887766">+79998887766</a>, или <a href="ss.php">оставьте заявку</a> и мы вам перезвоним!</p>
</div>
<div class="vnutri">
	<a	a href="dsd.php"> <img src="/image/12.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="opisanie">
		<p>Если Вы приобрели сложное бытовое оборудование и не уверены сможете ли правильно осуществить установку, то обращайтесь в нашу компанию.</p>
		<p></p>
		<p>Первоклассные и вежливые мастера сделают всё быстро и профессионально. Выполним установку и подключение бытовой техники в Кемерово: телевизоров, водонагревателей, варочных панелей, вытяжек и духовых шкафов, а также посудомоечных или стиральные машин и т.д.
		<p></p>
		<p>Работы и стоимость согласуются с заказчиком после диагностики оборудования и остаются неизменными до окончания ремонта. Бесплатная диагностика при последующем ремонте в нашем центре.</p>
	</div>
	<div class="oformit">
			<button id="otkrit">Оформить заказ</button>
		</div>
	<div class="pop_up" id="info">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_upe">
					<p>Оформить заказ</p>
					<form action="zayavki.php" method="post">
					<input type="text" name="name" placeholder="Ваше имя">
						<input type="text" name="telefon" placeholder="Контактный телефон">
						<input type="text" name="komm" placeholder="Комментарии"style="width:300px;height:100px">
						<button type="submit">Отправить</button>
					</form>
					<div class="pop_up_close" id="zakri">&#10006</div>
				</div>
			</div>
		</div>
	<script src="/JS/nasos.js"></script>

<style>

.dropbtn {
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
    width: 70%;
    height: 50%;
    margin-top: 100px;
    background-color: #6c9bff;
    margin-left: 30%;
    border-radius: 20px;

}

/* Кнопка выпадающего меню при наведении и фокусировке */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* Контейнер <div> - необходим для размещения выпадающего содержимого */
.dropdown {
  position: relative;
  display: inline-block;
  width: 70%;
    height: 50%;
}

/* Выпадающее содержимое (скрыто по умолчанию) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 70%;
  margin-left: 30%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  border-radius: 20px;
  z-index: 1;
}

/* Ссылки внутри выпадающего списка */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Изменение цвета выпадающих ссылок при наведении курсора */
.dropdown-content a:hover {background-color: #ddd}

/* Показать выпадающее меню (используйте JS, чтобы добавить этот класс .dropdown-content содержимого, когда пользователь нажимает на кнопку выпадающего списка) */
.show {display:block;}
	</style>
	<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Закройте выпадающее меню, если пользователь щелкает за его пределами
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
		</script>

<footer class="footer">
		<div class="tele">
			<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:15px;" alt=""> +7(999)888-77-66</a>
		
			<li class="ss">
				<a href="#"id="open_pop"><img src="/image/4.png" style="width:18px;" alt=""> Консультация </a>
			</li>
			<li class="ss">
				<a href="#" id="open_pop_up"><img src="/image/3.png" style="width:19px;" alt=""> Оставить заявку </a>
			</li>
		</div>
		<div class="menu">
			<a href="main.php"><img src="/image/logo8.png" style="width:250px; padding-right:150px" id="logo" alt=""></a>
			<div id="ssilki">
				<li class="ss">
					<a href="main.php">Главная </a>
				</li>
				<li class="ss">
					<a href="uslugi.php">Услуги </a>
				</li>
				<li class="ss">
					<a href="akciya.php">Акции </a>
				</li>
				<li class="ss">
					<a href="otzivi.php">Отзывы </a>
				</li>
				<li class="ss">
					<a href="kontakti.php">Контакты </a>
				</li>
				<li class="ss">
					<a href="kontakti.php">Вопрос-ответ </a>
				</li>
				<!--<li class="ss">
					<a href="авторизация.php">Личный кабинет </a>
				</li>--->
			</div>
		</div>
		</footer>
</body>
</html>
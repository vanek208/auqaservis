<?php
	session_start();
?>

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
	<link rel="stylesheet" href="css/sweetalert.min.css">
	<link rel="stylesheet" href="css/simple-adaptive-slider.css">
	<link href="css/accordion.css" rel="stylesheet">
	<link rel="stylesheet" href="css/cs-select.css" />
		<link rel="stylesheet" href="css/cs-skin-elastic.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
  	<script src="JS/accordion.js"></script>
	<title>Основная страница</title>
</head>

<body>

	<header>
						<? if($_SESSION['message']){
							echo'<p class="msg">'.$_SESSION['message'].'</p>';
						} 
						unset($_SESSION['message']);
						?>
						
		<div class="tele">
			<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:15px;" alt=""> +7(999)888-77-66</a>
		
			<li class="ss">
				<a href="#"id="open_pop"><img src="/image/4.png" style="width:18px;" alt=""> Консультация </a>
			</li>
			<li class="ss">
				<a href="#" id="open_pop_up"><img src="/image/3.png" style="width:19px;" alt=""> Оставить заявку </a>
			</li>
			
		</div>
		<div class="pop_up" id="pop_up">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up_body">
					<p>Оставить заявку</p>
					<form id="form" action="telegram.php" method="post">
					<div class="text-field">
        			<label class="text-field__label" for="firstname"></label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Имя" required>
       				 <div class="text-field__message"></div>
     				</div>
					 <div class="text-field">
        			<label class="text-field__label" for="firstname"></label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Контакты" required>
       				 <div class="text-field__message"></div>
     				</div>
					 <div class="text-field">
				<select class="tex">
					<option disabled selected>Выберите вид техники</option>
					<option>Франция</option>
					<option>Бразилия</option>
					<option>Аргентина</option>
					<option>Южная Африка</option>
				</select>
				 <div class="text-field__message"></div>
				</div>
					<textarea name="comment" id="textarea" placeholder="Комментарий"></textarea>
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_close">&#10006</div>
				</div>
			</div>
		</div>
		<div class="pop_up" id="pop">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up">
					<p>Консультация</p>
					<form id="formi" action="telegram2.php"  method="post">
					<div class="text-field">
        			<label class="text-field__label" for="firstname"></label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Имя" required>
       				 <div class="text-field__message"></div>
     				</div>
					 <div class="text-field">
        			<label class="text-field__label" for="firstname"></label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Контакты" required>
       				 <div class="text-field__message"></div>
     				</div>
					 <div class="text-field">
        			<label class="text-field__label" for="firstname"></label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Email" required>
       				 <div class="text-field__message"></div>
     				</div>
					 <textarea name="comment" id="textarea" placeholder="Комментарий"></textarea>
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_clos">&#10006</div>
				</div>
			</div>
		</div>

		<div class="line"></div>
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
	</header>

	<div class="remont">
	<div class="itcss">
    <div class="itcss__wrapper">
      <div class="itcss__items">
        <div class="itcss__item">
          <div style="height: 500px; background: #3f51b5;">
		  <a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
		  <div class="zayv">
			<button id="open_pop_u">Оcтавить заявку</button>
		</div>
		</div>
        </div>
        <div class="itcss__item">
          <div style="height: 500px; background: #3f51b5;">
		  <a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
		  <div class="zayv">
			<button id="open_pop_u">Оcтавить заявку</button>
		</div>
		</div>
        </div>
        <div class="itcss__item">
          <div style="height: 500px; background: #3f51b5;">
		  <a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
		  <div class="zayv">
			<button id="open_pop_u">Оcтавить заявку</button>
		</div>
		</div>
        </div>
		<div class="itcss__item">
          <div style="height: 500px; background: #3f51b5;">
		  <a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
		  <div class="zayv">
			<button id="open_pop_u">Оcтавить заявку</button>
		</div>
		</div>
        </div>
      </div>
    </div>
    <button class="itcss__btn itcss__btn_prev" role="button" data-slide="prev"></button>
    <button class="itcss__btn itcss__btn_next" role="button" data-slide="next"></button>
		<!--<div id="da">
			<img src="/image/7.jpg" style="width:1000px; margin-left:800px;" class = "glav" alt="">
		</div>
		<div class="uslugi">
			<h1>Ремонт и обслуживание бытовой техники</h1>
			<img src="/image/1pump.png" style="width:40px;" alt="">
			<div id=uslu>
				<p>Насосное оборудование</p>
			</div>
			<img src="/image/2tech.png" style="width:40px;" alt="">
			<div id=uslu>
				<p>Ремонт и установка бытовой техники</p>
			</div>
			<img src="/image/3plumb.png" style="width:40px;" alt="">
			<div id=uslu>
				<p>Системы отопления и водоснабжения</p>
			</div>
			<img src="/image/4heater.png" style="width:40px;" alt="">
			<div id=uslu>
				<p>Обслуживание внутренних систем отопления</p>
			</div>
			<img src="/image/5mech.png" style="width:40px;" alt="">
			<div id=uslu>
				<p>Запчасти и акксесуары для бытовой техники</p>
			</div>
		</div> -->
	</div>
	<div class="pop_up" id="pope">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_upe">
					<p>Оставить заявку</p>
					<form action="zayavki.php" method="post">
					<input type="text" name="name" placeholder="Ваше имя">
						<input type="text" name="telefon" placeholder="Контактный телефон">
						<input type="text" name="komm" placeholder="Комментарии"style="width:300px;height:100px">
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_closi">&#10006</div>
				</div>
			</div>
		</div>
	  <div class="uslum">
		<h1>НАШИ УСЛУГИ</h1>
	</div>
	<div class="line3"></div>
	<div class="vnutri">
		<a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri2">
		<a href="remont.php"> <img src="/image/12.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri3">
		<a href="sistema.php"> <img src="/image/14.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri4">
		<a href="obslushivanie.php"> <img src="/image/15.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri5">
		<a href="dsd.php"> <img src="/image/16.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri6">
		<a href="dsd.php"> <img src="/image/17.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
					</div>
	<!--<div class="lines"></div>
	<div class="uslum">
		<h1>НАШИ УСЛУГИ</h1>
	</div>
	<div class="line3"></div>
	<div class="vnutri">
		<a href="nasos.php"> <img src="/image/13.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri2">
		<a href="remont.php"> <img src="/image/12.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri3">
		<a href="sistema.php"> <img src="/image/14.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri4">
		<a href="obslushivanie.php"> <img src="/image/15.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri5">
		<a href="dsd.php"> <img src="/image/16.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
	<div class="vnutri6">
		<a href="dsd.php"> <img src="/image/17.png" style="width:350px; height: 400px;" alt=""></a>
	</div>
					-->
	<div class="line2"></div>

	<div class="uslum2">
		<h1>ДОВЕРЬТЕ РЕМОНТ БЫТОВОЙ ТЕХНИКИ ПРОФЕССИОНАЛАМ</h1>
	</div>
	<div class="line3"></div>
	<div class="dover">
		<img src="/image/18.png"  id="img" alt="">
		<div id=bistriy>
			<p1 style="font-size:20px;">Быстрый, недорогой и качественный способ решения проблемы ведь у каждого мастера за плечами не менее 10 лет профессиональной деятельности</p1>
		</div>
		<img src="/image/19.png" id="img2" alt="">
		<div id=bistriy2>
			<p1 style="font-size:20px;">Самый деликатный подход к вашей техники благодаря профессиональному оборудованию и инстурментам, а также совершенному владению ими мастером</p1>
		</div>
		<img src="/image/20.png"  id="img3" alt="">
		<div id=bistriy3>
			<p1 style="font-size:20px;">На все вопросы о ходе ремонта и о неисправности вы получите развернутые ответы ведь нам важно, чтобы у Вас не возникало новых проблем с вашей техникой</p1>
		</div>
		<img src="/image/21.png"  id="img4" alt="">
		<div id=bistriy4>
			<p1 style="font-size:20px;">Мы отвечаем за качество нашей работы и поэтому вежливо предоставим гарантию до 1 года на любые виды выполненных работ, потому что мы ценим своих клиентов</p1>
		</div>
		<div class="line2"></div>
		<div class="uslum4">
			<h1>ВСЕГО 4 ШАГА — И ВАША БЫТОВАЯ ТЕХНИКА БУДЕТ РАБОТАТЬ КАК НОВАЯ</h1>
		</div>
		<div class="line3"></div>
		<div class="dover">
			<img src="/image/22.png"  id="img5" alt="">
			<div id=punkt>
				<p1 style="font-size:20px;">Оставьте заявку через сайт, по телефону или любыми другими удобным для вас способом</p1>
			</div>
			<img src="/image/23.png"  id="img6" alt="">
			<div id=punkt2>
				<p1 style="font-size:20px;">Проведем диагностику, как правило мастеру требуется не больше 30 минут, чтобы точно определить проблему и способы ее устранения</p1>
			</div>
			<img src="/image/24.png"  id="img7" alt="">
			<div id=punkt3>
				<p1 style="font-size:20px;">Осуществим ремонт, чаще всего мастер устраняет неисправность на месте. Для этого у него с собой целый набор профессиональных инструментов</p1>
			</div>
			<img src="/image/25.png" id="img8" alt="">
			<div id=punkt4>
				<p1 style="font-size:20px;">Оплачиваете ремонт, стоимость работы и деталей устанавливается до начала работ и больше не меняется. Оплата производится по завершению ремонта</p1>
			</div>
			<div class="zvonok">
				<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:15px;" alt=""> +7(999)888-77-66</a>
			</div>
			<div class="zayv2">
				<button id="sos">Консультация</button>
			</div>
			<div class="pop_up" id="ppe">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_pe">
					<p>Консультация</p>
					<form action="konsultaciya.php" method="post">
					<input type="text" name="name" placeholder="Ваше имя">
						<input type="text" name="tele" placeholder="Контактный телефон">
						<input type="email" name="email" placeholder="Email">
						<input type="text" name="kom" placeholder="Комментарии" style="width:325px;height:100px;">
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_clasi">&#10006</div>
				</div>
			</div>
		</div>
					</div>
			<div class="zayv3">
				<button id="soss">Оставить заявку</button>
			</div>
			<div class="pop_up" id="ppes">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_pes">
					<p>Оставить заявку</p>
					<form action="zayavki.php" method="post">
					<input type="text" name="name" placeholder="Ваше имя">
						<input type="text" name="telefon" placeholder="Контактный телефон">
						<input type="text" name="komm" placeholder="Комментарии"style="width:320px;height:100px">
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_clasis">&#10006</div>
				</div>
			</div>
		</div>
		<style>
.accordion {
  background-color: #6c9bff;
  color: white;
  font-weight:bold;
  cursor: pointer;
  padding: 28px;
  width: 60%;
  margin-left: 22%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  border-radius: 20px;
}
 .accordion:hover {
  background-color: #314f8f;
}
.accordion:after {
  content: '\02795';
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796";
}
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
  width:60%;
  border-radius: 20px;
  margin-left:22%;
}
.voprosi{
	margin-top:50px
  }
</style>
</head>
<div class=voprosi>
<button class="accordion">Как долго мастер будет ремонтировать технику?</button>
<div class="panel">
  <p>Как правило, любые неисправности устраняются на дому в течение 1-2х часов. После этого ваша стиральная машина вновь готова к работе. В редких особо сложных случаях ремонта может потребоваться больше времени (например, замена подшипника) или повторный приезд мастера (например, перепайка управляющего модуля).</p>
</div>

<button class="accordion">Почему ремонт важно начать при первых признаках поломки?</button>
<div class="panel">
  <p>Конечно, поломки случаются не только по неосторожности. У многих моделей есть различные конструктивные недостатки. Иногда бывают аварии из-за неудачного стечения обстоятельств. При любом подозрении на неисправность – необычный шум, гул, протечки, нарушения в переключениях режимов работы – звоните нам. Сразу, не откладывая!</p>
</div>

<button class="accordion">Как оплатить заказ на ремонт бытовой техники?</button>
<div class="panel">
  <p>Мы принимаем оплату наличными мастеру после сдачи работы.</p>
</div>
<button class="accordion">Какую вы даете гарантию на работу?</button>
<div class="panel">
  <p>Срок гарантии 12 месяцев. Если в течение этого времени что‑то из сделанного нами сломается, то мы исправим всё за свой счёт.</p>
</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
			<div class="line2"></div>
			<div class="uslum5">
				<h1>Оставьте отзыв о нас</h1>
				<div class="line4"></div>
			</div>
			<div class="otziv">
				<p>Мы будем очень признательны за оставленные отзывы и комментарии о нашей работе, это поможет нам в достижении поставленной цели, и Вы станете нашими постоянными клиентами!</p>
			</div>
			<a href="https://2gis.ru/kemerovo/firm/704215723288759/86.061612%2C55.334263/tab/reviews?m=86.062494%2C55.333784%2F18.88"> <img src="/image/26.png" style="width:240px; height: 100px; margin-left: 21%; margin-top:70px;" alt=""></a>
			<a href="https://yandex.ru/maps/org/akvaservis/135460617137/?ll=86.060992%2C55.334458&z=19"><img src="/image/27.png"  id="img10" alt=""></a>
			<a href="https://www.google.com/maps/place/%D0%90%D0%BA%D0%B2%D0%B0%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81/@55.3340281,86.0620975,19z/data=!4m5!3m4!1s0x42d80c0c88e84361:0xb94f6d849c18c68e!8m2!3d55.3336658!4d86.0648776"><img src="/image/28.png" id="img9" alt=""></a>
		</div>
		<div class="line2"></div>
		<div class="uslum6">
			<h1>Контакты</h1>
		</div>
		<div class="line5"></div>
		<img src="/image/30.png" id="img11" alt="">
		<div class="adres">
			<h1>Адрес</h1>
		</div>
		<div class="adres2">
			<p>Кемерово,Заводский район, ​кузнецкий проспект, 101, 1 этаж</p>
		</div>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa222fd47eb1a6ebcf56b01a5bca11eb6d13c4c6915af0d7f0a0aad22cd4f40a4&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>

		<div class="telep">
			<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:35px;" alt="">+7(999)888-77-66</a>
		</div>

		<div class="chasi">
			<img src="/image/33.png" style="width:35px; margin-left: 61%; margin-top:-200px;" alt="">
		</div>
		<div class="chasi2">
			<h1>Часы работы</h1>
			<p>Понедельник-Пятница: с 10:00 до 18:00</p>
			<p>Суббота: с 10:00 до 15:00</p>
			<p>Воскресенье: выходной</p>
		</div>
		<div class="email">
			<img src="/image/31.png" style="width:35px; margin-left: 21%;" alt="">
		</div>
		<div class="email2">
			<p>info@2793109.ru</p>
		</div>
		
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
		<script src="/JS/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="JS/sweetalert.min.js"></script>
		<script src="JS/form.js"></script>
		<script defer src="JS/simple-adaptive-slider.js"></script>
		<script src="/JS/da.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // активация слайдера
      new ItcSimpleSlider('.itcss', {
        loop: true,
        autoplay: true,
        swipe: true
      });
    });
  </script>	
  <script>
    new ItcAccordion(document.querySelector('.accordion'), {
      alwaysOpen: true
    });
  </script>
  
</body>

</html>
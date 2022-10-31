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
		<a href="lichkabinet.php">Вопрос-ответ</a>
		</li>
		</div>    
</div>
</header>
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
.active, .accordion:hover {
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
	margin-top:150px
  }
</style>
</head>
<img src="/image/40.png" style="width:100%; height: 250px; padding-top:40px" alt="">
<div class="uslugii">
<p>Вопрос-ответ</p>
</div>
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
<button class="accordion">Как найти мастера по ремонту бытовой техники на вашем портале?</button>
<div class="panel">
  <p>Выберите необходимую вам услугу, заполните форму и мы сами подберем вам мастера</p>
</div>
<button class="accordion">Как найти мастера по ремонту бытовой техники на вашем портале?</button>
<div class="panel">
  <p>Выберите необходимую вам услугу, заполните форму и мы сами подберем вам мастера</p>
</div>
<button class="accordion">Почему клиенты выбирают нашу компанию?</button>
<div class="panel">
  <p>1) Цены для экономных. Вы получаете сервис по более выгодным расценкам, чем у многих фирм Кемерово.
     2) Потому что мастера и их накопленный опыт, наличие современных инструментов и личный склад запчастей, расходных материалов позволяют справляться с любыми по сложности задачами, восстанавливать, казалось бы, ту технику, что уже просто непригодна для выполнения ее основных функций
  </p>
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
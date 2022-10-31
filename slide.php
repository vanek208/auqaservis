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
					<form id="form" action="zayavki.php" method="post">
					<div class="text-field">
        			<label class="text-field__label" for="firstname">First name*</label>
       			 	<input class="text-field__input" type="text" name="firstname" id="firstname"  placeholder="Имя" required>
       				 <div class="text-field__message"></div>
     				</div>
						<input type="text" name="telefon" placeholder="Контактный телефон">
						<input type="text" name="komm" placeholder="Комментарии"style="width:300px;height:100px">
						<button type="submit">Отправить</button>
					</form>
					<div class="pop_up_close" id="zakri">&#10006</div>
				</div>
			</div>
		</div>
	<script src="/JS/nasos.js"></script>
	<script>

    const form = document.querySelector('#form');

    const checkValidity = (input) => {
      input.classList.remove('text-field__input_valid');
      input.classList.remove('text-field__input_invalid');
      input.nextElementSibling.textContent = '';
      if (input.checkValidity()) {
        input.classList.add('text-field__input_valid');
        input.nextElementSibling.textContent = 'Отлично!';
      } else {
        input.classList.add('text-field__input_invalid');
        input.nextElementSibling.textContent = input.validationMessage;
      }
    }

    const checkValidityAll = () => {
      const inputs = form.querySelectorAll('input');
      inputs.forEach((input) => {
        checkValidity(input);
      });
    }

    const onCheckValidity = (e) => {
      const target = e.target;
      if (!target.classList.contains('text-field__input')) {
        return;
      }
      checkValidity(target);
    }

    form.addEventListener('change', onCheckValidity);
    form.addEventListener('keydown', onCheckValidity);
    form.addEventListener('keyup', onCheckValidity);
    checkValidityAll();


    form.addEventListener('submit', (e) => {
      e.preventDefault();
      checkValidityAll();
    });
	
  </script>
  <style>
	

	
	</style>
</body>
</html>
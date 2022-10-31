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
	<link href="css/accordion.css" rel="stylesheet">
  	<script src="JS/accordion.js"></script>
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
		<div class="accordion" style="max-width: 300rem; margin: 1rem auto 2rem;">
    <div class="accordion__item accordion__item_show">
      <div class="accordion__header">
        Заголовок 1
      </div>
      <div class="accordion__body">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur et numquam optio, aut consequuntur iure magni
        tempore quo, velit, quos ipsum perferendis sit quidem sapiente voluptatem nesciunt rerum soluta amet.
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">
        Заголовок 2
      </div>
      <div class="accordion__body">
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
    </div>
	<script src="/JS/nasos.js"></script>
	
	<script>
    new ItcAccordion(document.querySelector('.accordion'), {
      alwaysOpen: true
    });
  </script>
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
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
	<title>Основная страница</title>
</head>

<body>
	<style>
		.pop_up_body2 {
	margin: auto;
	width: 500px;
	background-color: rgb(153, 171, 254);
	border-radius: 10px;
	text-align: center;
	padding: 100px 15px 110px 15px;
	position: relative;
}

.pop_up_body2 p {
	font-size: 28px;
	font-weight: 600;
	color: #000000;
	margin-bottom: 40px;
}

.pop_up_body2 input {
	display: block;
	margin: 25px auto 0px auto;
	width: 330px;
	padding: 17px 20px;
	background-color: #e5e5e5;
	border-radius: 10px;
	border: none;
	font-weight: 500;
	font-size: 18px;
	color: #000000;
}

.pop_up_body2 input:focus {
	outline: none;
}

.pop_up_body2 button {
	cursor: pointer;
	display: block;
	width: 330px;
	margin: 60px auto 0px auto;
	padding: 20px 0px;
	font-weight: 500;
	border: none;
	color: white;
	border-radius: 10px;
	background-color: #6c9bff;
}

.pop_up_close2 {
	position: absolute;
	top: 15px;
	right: 15px;
	font-size: 21px;
	cursor: pointer;
}
	</style>

	<header>

		<div class="tele">
			<a href="tel:+79998887766" id="telef"><img src="/image/2.png" style="width:15px;" alt=""> +7(999)888-77-66</a>
			<li class="ss">
				<a href="#"id="open_pop"><img src="/image/4.png" style="width:18px;" alt=""> Консультация </a>
			</li>
			<div class="button">
				<a href="#" id="open_pop_up">Оставить заявку </a>
			</div>
		</div>
		<div class="pop_up" id="pop">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up_bo">
					<p>Оставить заявку</p>
					<form action="">
						<input type="text" placeholder="Ваше имя">
						<input type="text" placeholder="Контактный телефон">
						<input type="text" placeholder="Сообщение">
						<button>Отправить</button>
					</form>
					<div class="pop_up_close" id="pop_up_clos">&#10006</div>

				</div>
			</div>
		</div>
		<div class="pop_up2" id="pop_up2">
			<div class="pop_up_container2">
				<div class="pop_up_body2" id="pop_up_body2">
					<p>Оставить заявку</p>
					<form action="">
						<input type="text" placeholder="Ваше имя">
						<input type="text" placeholder="Контактный телефон">
						<input type="text" placeholder="Сообщение">
						<button>Отправить</button>
					</form>
					<div class="pop_up_close2" id="pop_up_close2">&#10006</div>

				</div>
			</div>
		</div>
</body>
<script>
const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function (e) {

	e.preventDefault();
	popUp.classList.add('active');
})
closePopUp.addEventListener('click', () => {
	popUp.classList.remove('active');
})
  </script>
  <script>
const openPopUp2 = document.getElementById('open_pop');
const closePopUp2 = document.getElementById('pop_up_clos');
const popUp2 = document.getElementById('pop');

openPopUp2.addEventListener('click', function (e) {

	e.preventDefault();
	popUp2.classList.add('active');
})
closePopUp2.addEventListener('click', () => {
	popUp2.classList.remove('active');
})
  </script>
  
</html>
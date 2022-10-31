<?php
		session_start();
		if($_SESSION['users']){
			header('location:../profile.php');
		}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="1.css">
	<title>Магазин обуви</title>
</head>

<body>
	<div class="container">
		<h1>Форма регистрации</h1>

		<form action="signup.php" method="post">
			<label>Логин</label>
			<input type="text" name="login" id="login" class="form-controler" placeholder="Введите свой логин">
			<label>Почта</label>
			<input type="email" name="email" id="email" class="form-controler" placeholder="Введите свою почту">
			<label>Пароль</label>
			<input type="password" name="password" id="password" class="form-controler"
				placeholder="Введите свой пароль">
			<button>Войти</button>
			<p>
				У вас уже есть аккаунт? <a href="Авторизация.php">Авторизируйтесь</a>!
			</p>
			<?php
			if($_SESSION['message']){
				echo '<p class="msg">'. $_SESSION['message']. ' </p>';
			}
			unset($_SESSION['message']);
		?>

		</form>
	</div>
</body>

</html>
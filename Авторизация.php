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
	<form action="check.php" method="post">
		<label>Login</label>
		<input type="text" id="login" name="login" placeholder="Введите свой логин">
		<label>Password</label>
		<input type="password" id="password" name="password" placeholder="Введите свой пароль">
		<button type="submit">Войти</button>
		<p>
			У вас нет аккаунта? <a href="Регистрация.php">Зарегистрируйтесь</a>!
		</p>
		
		<?php
			if($_SESSION['message']){
				echo '<p class="msg">'. $_SESSION['message']. ' </p>';
			}
			unset($_SESSION['message']);
			
		?>

	</form>
	
</body>

</html>
<?php

	session_start();
	require_once 'connect.php';
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5|| mb_strlen($login)> 90){
		echo "Недопустимая длина логина";
		exit();
	}
	else if(mb_strlen($password) < 2|| mb_strlen($password)> 50){
		echo "Недопустимая длина пароля (От 2 до 50 длина пароля)";
		exit();
	}
	$password = md5($password."aasda23112");

	$mysql -> query ("INSERT INTO `users` (`id`,`login`,`email`,`password`) values('', '$login','$email','$password') ");

	$_SESSION['message'] = 'Вы успешно зарегистрировались. Войдите в аккаунт';
	header ('location:../авторизация.php');
	$mysql -> close();
	
?>


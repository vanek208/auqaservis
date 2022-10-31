<?php
	
	session_start();
	require_once 'connect.php';
	
	$login = $_POST['login'];
    $password = $_POST['password'];

	$password = md5($password."aasda23112");


	$result = $mysql-> query("select * from `users` where `login` = '$login' AND `password` = '$password'");

	
	if(mysqli_num_rows($result)>0){
		$users = mysqli_fetch_assoc($result);
		
		$_SESSION['users']=[
			"id" => $users['id'],
			"login"=> $users['login'],
			"email"=> $users['email']
		];
		header('location:../profile.php');
	}
	
	else {$_SESSION['message'] = 'Не верный логин или пароль. Попробуйте заного.';
		header('location:../Авторизация.php');
	}

	


?>
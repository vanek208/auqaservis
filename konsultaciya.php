<?php
	session_start();
	require_once 'db.php';
	
	
	$name=$_POST['name'];
	$tele=$_POST['tele'];
	$email=$_POST['email'];
	$kom=$_POST['kom'];
	$check=$mysql -> query ("INSERT INTO `konsultaciya` (`id`,`Firstname`,`tele`,`email`,`Kommentariy`) values('', '$name','$tele','$email','$kom') ");
	

	if(mysqli_num_rows($check) >0){
		

	}
	
	else{
	$_SESSION['message'] = 'Успешно отправлено, ожидайте скоро вам ответят';
	header('location:main.php');
	}

?>

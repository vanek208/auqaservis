<?php
	session_start();
	require_once 'db.php';
	
	
	$name=$_POST['name'];
	$telefon=$_POST['telefon'];
	$komm=$_POST['komm'];
	$check=$mysql -> query ("INSERT INTO `zayavki` (`id`,`name`,`telefon`,`kommentariy`) values('', '$name','$telefon','$komm') ");
	

	if(mysqli_num_rows($check) >0){
		

	}
	
	else{
	$_SESSION['message'] = 'Успешно отправлено, ожидайте скоро вам ответят';
	header('location:main.php');
	}
	

?>

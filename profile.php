<?php
	session_start();
	if(!$_SESSION['users']){
		header('location: /');
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<form>
			
			<h2><?= $_SESSION['users']['login']?></h2>
			<h2><?= $_SESSION['users']['email']?></h2>
			<a href="logout.php"><? $_SESSION['users']['email']?>Выйти</a>

		</form>
</body>
</html>


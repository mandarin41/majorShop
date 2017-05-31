<?php
	require('../php/header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Обратная связь</title>
		<link rel="icon" type="image/png" href="../img/label.png">
	</head>
	<body>
		<table cellspacing="0" width="100%" height=150 border=0>
			<tr class=headline  height="100%">
				<?php require('../php/face.php'); ?>
			</tr>
		</table>
		<hr>
		<p>Введите ваши данные:</p>
		<form action="../php/request_test.php" method="get" enctype="appdata/x-www-urlencoded">
			<input type="text" name="Name" placeholder="Имя">
			<input type="text" name="Surname" placeholder="Фамилия">
			<input type="submit" value="ОТПРАВИТЬ">
		</form>
	</body>
</html>

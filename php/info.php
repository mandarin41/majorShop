<?php
	require('../php/header.php');
	$_SESSION['category']='info';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Контакты</title>
			<link rel="icon" type="image/png" href="../img/label.png">
	</head>
	<body>
		<table border = 2  width = "100%" height = "500">
			<tr class = headline  height = "5%">
			<?php require('../php/face.php'); ?>
			</tr>
			<tr>
				<td width = "20%" valign = "top">
					<ul>
						<li><a href = "../html/googlemap.html" target = "pic">Как нас найти в городе</a></li>
						<br>
						<hr>
						<li><a href = "../html/building.html" target = "pic">Как нас найти в здании</a></li>
						<br>
						<hr>
					</ul>
					<p align = "center"><iframe name="info" width="200" height="70"></iframe></p>
				</td>
				<td width = "50%" valign = "center" align = "center">
					<p><iframe name="pic" width="800" height="600"></iframe></p>
				</td>
			</tr>
		</table>
	<body>
</html>

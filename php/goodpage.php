<?php
	require('../php/header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Бытовая техника</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/style_1.css">
	</head>
	<body>
		<table cellspacing = "0" width = "100%" height = 1500 border = 0>
			<tr class = headline  height = "5%">
				<td colspan = "2" valign = "left" align = "left">	
				</td>
				<?php require('../php/face.php'); ?>
			</tr>
			<?php require('../php/topline.php'); ?>
			<tr class = underhead height = "5%">
				<td colspan = "3">
					<p class = refer><a href = "../index.php">Главная>>></a></p>
				</td>
				<?php require('../php/geo.php'); ?>
			</tr>
			
			<?php
				$arr=unserialize(file_get_contents("../txt/a.txt"));
				
				foreach ($_POST as $key => $value) $needle=$key;

				for ($i=1, $key=false;$key === false; $i++) $key = array_search($needle, $arr[$i]);
				$index=$i-1;
				$_SESSION['name']=$arr[$index]['name'];
				$_SESSION['price']=$arr[$index]['price'];
				echo '<tr height="5%">
						<td style="border: 1px solid" align="center" colspan = "2"><p>Номер</p>
						</td>
						<td style="border: 1px solid" align="center" colspan = "4"><p>Артикул</p>
						</td>
						<td style="border: 1px solid" align="center" colspan = "4"><p>Название</p>
						</td>
					</tr>
					<tr class = good1 height = "10%">
						<td style="border: 1px solid" colspan = "2" align="center">
							<font size = "4">'.$index.'</font>
						</td>
						<td style="border: 1px solid"  align="center" colspan = "4">
							<font size = "4">'.$arr[$index]['article'].'</font>
						</td>
						<td style="border: 1px solid"  colspan = "2" align = "center">
							<font size = 4>'.$arr[$index]['name'].'</font>
						</td>
					</tr>
					<tr height="5%"><td style="border: 1px solid"  align="center" colspan = "2"><p>Вид</p></td>
						<td style="border: 1px solid"  align="center" colspan = "4"><p>Описание</p>
						</td>
						<td style="border: 1px solid"  align="center" colspan = "4"><p>Стоимость</p>
						</td>
					</tr>
					<tr class = good2 height = "10%">
						<td style="border: 1px solid"  colspan = "2">
							<img class = "goods" src = "'.$arr[$index]['pic'].'" width = "80%">
						</td>
						<td style="border: 1px solid"  colspan = "4">
							<p>'.$arr[$index]['description'].'</p>
						</td>
						<td style="border: 1px solid"  colspan = "2" align = "center">
							<font size = 6>'.$arr[$index]['price'].'</font>
						</td>
					</tr>
					<tr height="5%"><td style="border: 1px solid"  align="center" colspan = "2"><p>Вес</p>
						</td>
						<td style="border: 1px solid"  align="center" colspan = "4"><p>Доставка</p>
						</td>
						<td style="border: 1px solid"  align="center" colspan = "4"><p>Корзина</p>
						</td>
					</tr>
					<tr class = good3 height = "10%">
						<td align = "center" style="border: 1px solid" colspan = "2">
							<font size = "4">'.$arr[$index]['weight'].'</font>
						</td>
						<td align = "center" style="border: 1px solid" colspan = "4">
							<font size = "4">'.$arr[$index]['delivery'].'</font>
						</td>
						<td style="border: 1px solid" colspan = "2" align = "center">
							<p><a href="../php/add_to_cart.php">Добавить в корзину</a></p>
							<p><a href="../php/cart.php">Перейти в корзину</a></p>
						</td>
					</tr>';
						
			?>
			<?php require('../php/down.php'); ?>
		</table>
	<body>
</html>

<?php
	require('../php/header.php');
	$_SESSION['category']='list';
?>

<?php
	$arr=unserialize(file_get_contents("../txt/a.txt"));
	echo '<head>
				<meta charset="utf-8">
				<title>Список товаров</title>
				<link rel="icon" type="image/png" href="../img/label.png">
		</head>
			<table width = "100%">
			<tr width = "100%">
				<td width = "20%">
					<font size = 6>Список товаров</font>
				</td>';
				require('../php/face.php');
			echo '</tr>
		</table>
			<table width="100%" border="1" cellpadding="4" cellspacing="0">
			<caption><h3>Каталог товаров</h3></caption>
				<tr>
				<th>Номер</th><th>Артикул</th><th>Название</th><th>Описание</th><th>Вес</th><th>Стоимость</th><th>Доставка</th><th>Картинка</th>';
				
	foreach($arr as $key=>$val){
		$article=$val['article'];
		$name=$val['name']; 
		$description=$val['description']; 
		$weight=$val['weight'];
		$price=$val['price'];
		$delivery=$val['delivery'];
		$pic=$val['pic'];
	
		echo '</tr>
			<td>'.$key.'</td><td>'.$article.'</td><td>'.$name.'</td><td>'.$description.'</td><td>'.$weight.'</td><td>'.$price.'</td>
			<td>'.$delivery.'</td><td><a href="'.$pic.'" target="_blank">Ссылка </a></td>';
	
	}
?>
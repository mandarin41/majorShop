<?php
	require('../php/header.php');
	$_SESSION['category']='customer';
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Страничка потребителя</title>
		<link rel="icon" type="image/png" href="../img/label.png">
	</head>
	<body>
		<table width = "100%">
			<tr width = "100%">
				<td width = "20%">
					<font size = 6>Страничка потребителя</font>
				</td>
				<?php require('../php/face.php'); ?>
			</tr>
		</table>
		<hr>
	</body>
</html>

<?php
	$arr=unserialize(file_get_contents("../txt/cust.txt"));
	echo '<table width="100%" border="1" cellpadding="4" cellspacing="0">
			<caption><h3>Список товаров</h3>
			</caption>
				<tr>
					<th>#</th><th>Название</th><th>Аннотация</th><th>Ссылка</th>';
	if($arr){
		foreach($arr as $key=>$val){
			$name=$val['name']; 
			$description=$val['description']; 
			$doc=$val['doc'];
			echo '</tr><td>'.$key.'</td><td>'.$name.'</td><td>'.$description.'</td><td><a href="'.$doc.'" target="_blank">'.$doc.'</a></td>';
		}
	}
?>
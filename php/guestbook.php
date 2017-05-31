<?php
	require('../php/header.php');
	$_SESSION['category']='guestbook';
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Гостевая книга</title>
		<link rel="icon" type="image/png" href="../img/label.png">
	</head>
	<body>
		<table width = "100%">
			<tr width = "100%">
				<td width = "20%">
					<font size = 6>Гостевая книга</font>
				</td>
				<?php require('../php/face.php'); ?>
			</tr>
		</table>
		<hr>
		<form method="post">
			<p>Ник</p>
			<input type="text" name="nick" value="<?php echo $jingle ?>">
			<p>Тема</p>
			<input type="text" name="theme">
			<p>Сообщение</p>
			<textarea rows="5" cols="40" name="msg"></textarea>
			<p><input type="submit" name="addstory" value="Добавить"></p> 
		</form>
	</body>
</html>

<?php
	if(isset($_POST['addstory'])) {
		$arr=unserialize(file_get_contents("../txt/stories.txt"));
		if(count($arr)==null) $index=1;
		else $index=count($arr)+1;
		$arr[$index]['nick']=htmlspecialchars($_POST['nick']);
		$arr[$index]['theme']=htmlspecialchars($_POST['theme']);
		$arr[$index]['msg']=htmlspecialchars($_POST['msg']);
		file_put_contents("../txt/stories.txt",serialize($arr));
		$index++;
	}
	
	$arr=unserialize(file_get_contents("../txt/stories.txt"));
	echo '<table width="100%" border="1" cellpadding="4" cellspacing="0">
			<caption><h3>Отзывы и предложения</h3>
			</caption>
				<tr>
					<th>#</th><th>Ник</th><th>Тема</th><th>Сообщение</th>';
	if($arr){
		foreach($arr as $key=>$val){
			$nick=$val['nick']; 
			$theme=$val['theme']; 
			$msg=$val['msg'];
			echo '</tr><td>'.$key.'</td><td>'.$nick.'</td><td>'.$theme.'</td><td>'.$msg.'</td>';
		}
	}
?>
<?php
	echo'<td align="center">';
					echo '
						<font size="4">
						<a href="../php/cart.php">Корзина: ', $_SESSION['count'], '</a>
						</font>
						';
				echo '</td>
				<td colspan="1" valign="right" align="right">
					<p align="right"><a href="../index.php"><img src="../img/label.png" width="50" height="50"></a></p>
				</td>		
				<td colspan="2">
					<font size=6>Major Shop</font>
				</td>
				<td colspan="2">
					<p align="right">';
					echo '<p align="right" style="font-size:20px; color:red">Добро пожаловать, '.$jingle.'!</p>';
					echo'</p>
					<form action="../php/exit.php" align="right"><input type="submit" value="Выход"></form>
				</td>';
?>
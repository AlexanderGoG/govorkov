<?php
function drawTable ($cols , $rows , $color ) {
 echo "<table border='1'>\n";
 for($r=1;$r<=$rows;$r++){
	 echo "<tr>\n";
	 for($c=1; $c<=$cols; $c++){
		 if($r==1 || $c==1){echo "\t\t<th style='background:$color'>".$r*$c."</th>\n";}
		 else{echo "\t\t<td>".$r*$c."</td>\n";}
	 }
	 echo "</tr>";
 }
 echo "</table>";}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Таблица умножения</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Таблица умножения</h1>
			 <?php
drawTable(rand(1,10),rand(1,10),'red');
    ?>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<!-- Таблица -->
			
			<!-- Таблица -->
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<?php
			$leftMenu = [['link'=>'Домой', 'href'=>'index.php'],['link'=>'О нас', 'href'=>'about.php'],
			['link'=>'Контакты', 'href'=>'contact.php'],['link'=>'Таблица', 'href'=>'table.php']];
			

			foreach ($leftMenu as $item) { 
				echo "<ul>";
					echo "<li>";
						echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
					echo "</li>";
				echo "</ul>";
			}?>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Веб-мастер, 2017
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>
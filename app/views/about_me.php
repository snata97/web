<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Обо мне
		</title>	
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/my_style.css">
		<script src="/assets/js/script_for_my_interests.js"></script>
		<script src="/assets/js/script_for_date.js"></script>
		<script src="/assets/js/script_for_home_page.js"></script>
		<script src="/assets/js/history.js"></script>
</HEAD>
<BODY> 
	<header>
		<nav>
			<ul class="menu" id="menu" value="2">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="about_me.php" id="2">Обо мне</a></li>
				<li id="li_3"><a href="interests" class="menu_item" id="3" onmouseover="ChangeColor3(),SubMenu(id)" onmouseout="ReChange()">Мои интересы</a>
					<script>CreateSubMenu();</script>
				</li>
				<li><a href="studies" id="4" onmouseover="ChangeColor4()" onmouseout="ReChange()">Учеба</a></li>
				<li><a href="photos" id="5" onmouseover="ChangeColor5()" onmouseout="ReChange()">Фотоальбом</a></li>
				<li><a href="contact" id="6" onmouseover="ChangeColor6()" onmouseout="ReChange()">Контакт</a></li>
				<li><a href="tests" id="7" onmouseover="ChangeColor7()" onmouseout="ReChange()">Тест по дисциплине</a></li>
				<li><a href="history" id="8 ">История просмотра</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
	<div id="H1">
		<h1>Автобиография</h1>
	</div>
	<div class="autobiography">
	<p><span class="p_style_first_letter">Я</span>, Сидоренко Наталия Сергеевна, родилась 26 мая 1997 года в городе Ноябрьск.</p>
	<p><span class="p_style_first_letter">C</span> 2004 по 2015 г. обучалась в среднеобразовательной школе №9 г. Ноябрьск.</p>
	<p><span class="p_style_first_letter">C</span> 2004 по 2012 г. обучалась в детской музыкальной школе №2 г. Ноябрьск по классу "хоровое пение".</p>
	<p><span class="p_style_first_letter">C</span> 2015 по 2017 г. обучалась в филиале МГУ в г.Севастополь по направлению "Прикладная математика и информатика".</p>
	<p><span class="p_style_first_letter">C</span> 2017 г. - студент кафедры информационных систем по направлению "Геоинформационные системы и технологии" Севастопольского государственного университета, на 3 курсе которого я сейчас обучаюсь.</p>
	</div>
	<script>LocalStorage("about");</script>
	<script>SaveToCookies("about");</script>
	<footer>
		<p>&copy; Сидоренко Наталия </p>
	</footer>
	</BODY>
</HTML>
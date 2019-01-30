<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Фотоальбом
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
			<ul class="menu" id="menu" value="1">
				<li><a href="home" id="1">Главная</a></li>
				<li><a href="about_me" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
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
        <script>CreateTableCurrentHistory();CreateTableAllTimeHistory();</script>
		<footer>
			<p>&copy; Сидоренко Наталия </p>
		</footer>
</BODY>
</HTML>
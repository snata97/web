<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Мои интересы
		</title>	
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/my_style.css">
		<script src="/assets/js/script_for_my_interests.js"></script>
		<script src="/assets/js/script_for_date.js"></script>
		<script src="/assets/js/script_for_home_page.js"></script>
		<script src="/assets/js/history.js"></script>
        <?php include $_SERVER['DOCUMENT_ROOT']."/assets/php/interests_script.php"; ?>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>		
</HEAD>
<BODY> 
	<header>
		<nav>
			<ul class="menu" id="menu_interests" value="3">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="about_me" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="interests" class="menu_item" id="3" onmouseover="SubMenu(id)">Мои интересы</a>
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
	<div class="interes">
		<h1> Содержание страницы: </h1>
	</div>
	<nav>
		<ul class="interes">
			<li><a href="#p1">Хобби</a></li>
			<li><a href="#p2">Любимые сериалы</a></li>
			<li><a href="#p3">Любимая музыка</a></li>
			<li><a href="#p4">Любимые компьютерные игры</a></li>
			<li><a href="#p5">Спорт</a></li>
		</ul>
	</nav>
	<div class="interes">
		<p id="p1">Хобби</p>
			<ol class="interes">
                <?php
                    Interests("Вышивка крестом","Квиллинг");
                ?>
			</ol>
		<p id="p2">Любимые сериалы</p>
			<ol class="interes">
                <?php
			        Interests("Pride & Prejudice","The Big Bang Theory","Sherlok",
                    "How i met your mother","Friends","Интерны","Кухня","Desperate Housewives",
                    "Game of Thrones","Westworld","Сваты");
                ?>
			</ol>
		<p id="p3">Любимая музыка</p>
			<ol class="interes">
                <?php
				    Interests("Alexandre Desplat - The Meadow","Kaleo - Way Down We Go",
                    "Ray Charles - Hit the road, Jack","Pompeya - 90","Adam Lambert - Mad World",
				    "Дэвид Арнольд & Майкл Прайс - The Game is On","Mattew Clark,James David Pickering - Sirens","Muse - Supermassive Black Hole",
				    "Imagine Dragons - Natural","Imagine Dragons - Believer","Alphaville - Forever young",
                    "Dorian - La Tormenta","Twenty one pilots - Heathens","Алексеев - Пьяное солнце",
                    "Звери - Районы-кварталы","The Hatters - Зима","SHANGUY - La Louze",
                    "Фредерик Шопен - Осенний вальс","Ace of base - All that she wants");
			    ?>
			</ol>
		<p id="p4">Любимые компьютерные игры</p>
			<ol class="interes">
                <?php
				    Interests("The Sims","Spore","Asphalt");
				?>
			</ol>
		<p id="p5">Спорт</p>
			<ol class="interes">
			    <?php
			        Interests("Плавание","Катание на коньках","Катание на лыжах");
			    ?>
			</ol>
	</div>
	<script>LocalStorage("interests");</script>
	<script>SaveToCookies("interests");</script>
	<footer>
		<p>&copy; Сидоренко Наталия </p>
	</footer>
</BODY>
</HTML>
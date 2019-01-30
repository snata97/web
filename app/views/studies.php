<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Учеба
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
			<ul class="menu" id="menu" value="4">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="about_me" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="interests" class="menu_item" id="3" onmouseover="ChangeColor3(),SubMenu(id)" onmouseout="ReChange()">Мои интересы</a>
					<script>CreateSubMenu();</script>
				</li>
				<li><a href="studies" id="4">Учеба</a></li>
				<li><a href="photos" id="5" onmouseover="ChangeColor5()" onmouseout="ReChange()">Фотоальбом</a></li>
				<li><a href="contact" id="6" onmouseover="ChangeColor6()" onmouseout="ReChange()">Контакт</a></li>
				<li><a href="tests" id="7" onmouseover="ChangeColor7()" onmouseout="ReChange()">Тест по дисциплине</a></li>
				<li><a href="history" id="8 ">История просмотра</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
	<div id="H1">
		<h1>Севастопольский государственный университет</h1>
	</div>
	<div id="H2">
		<h1>кафедра "Информационные системы"</h1>
	</div>
	<div class="tables">
		<table>
			<TR class="studies">
				<TD>1 семестр</TD>
				<TD>2 семестр</TD>
				<TD>3 семестр</TD>
				<TD>4 семестр</TD>
			</TR>
			<TR>
				<TD>история</TD>
				<TD>философия</TD>
				<TD>компьютерная графика</TD>
				<TD>теория баз данных</TD>
			</TR>
			<TR>
				<TD>иностранный язык</TD>
				<TD>иностранный язык</TD>
				<TD>иностранный язык</TD>
				<TD>иностранный язык</TD>
			</TR>
			<TR>
				<TD>высшая математика</TD>
				<TD>высшая математика</TD>
				<TD>высшая математика</TD>
				<TD>теория вероятностей и математическая статистика</TD>
			</TR>
			<TR>
				<TD>объектно-ориентированное программирование</TD>
				<TD>технология программирования</TD>
				<TD>объектно-ориентированное программирование</TD>
				<TD>объектно-ориентированное программирование</TD>
			</TR>
			<TR>
				<TD>информатика</TD>
				<TD>экономическая теория</TD>
				<TD>архитектура компьютерных систем</TD>
				<TD>технологии создания программных продуктов</TD>
			</TR>
			<TR>
				<TD>физика</TD>
				<TD>физика</TD>
				<TD>теория электрических цепей</TD>
				<TD>электроника</TD>
			</TR>
			<TR>
				<TD><a href="tests.php">экология</a></TD>
				<TD>безопасность жизнедеятельности</TD>
				<TD>численные методы</TD>
				<TD>основы системного анализа</TD>
			</TR>
			<TR>
				<TD>методы и системы искусственного интеллекта</TD>
				<TD>основы права</TD>
				<TD>экономика и организация IT-предприятия</TD>
				<TD>основы теории алгоритмов</TD>
			</TR>
			<TR>
				<TD>алгоритмизация и программирование</TD>
				<TD>алгоритмизация и программирование</TD>
				<TD>алгоритмизация и программирование</TD>
				<TD>операционные системы</TD>
			</TR>
			<TR>
				<TD>дискретная математика</TD>
				<TD>дискретная математика</TD>
				<TD colspan="2"></TD>
			</TR>
			<TR>
				<TD>веб-технологии</TD>
				<TD colspan="3"></TD>
			</TR>
		</table>
	</div>
	<script>LocalStorage("studies");</script>
	<script>SaveToCookies("studies");</script>
	<footer>
		<p>&copy; Сидоренко Наталия </p>
	</footer>
</BODY>
</HTML>
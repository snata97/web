<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Тест по дисциплине "Основы экологии"
		</title>	
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/my_style.css">
		<script src="/assets/js/script_for_validate_forms.js"></script>
		<script src="/assets/js/script_for_my_interests.js"></script>
		<script src="/assets/js/script_for_date.js"></script>
		<script src="/assets/js/script_for_home_page.js"></script>
		<script src="/assets/js/history.js"></script>
</HEAD>
<BODY> 
	<header>
		<nav>
			<ul class="menu" id="menu" value="7">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="about_me" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="interests" class="menu_item" id="3" onmouseover="ChangeColor3(),SubMenu(id)" onmouseout="ReChange()">Мои интересы</a>
					<script>CreateSubMenu();</script>
				</li>
				<li><a href="studies" id="4" onmouseover="ChangeColor4()" onmouseout="ReChange()">Учеба</a></li>
				<li><a href="photos" id="5" onmouseover="ChangeColor5()" onmouseout="ReChange()">Фотоальбом</a></li>
				<li><a href="contact" id="6" onmouseover="ChangeColor6()" onmouseout="ReChange()">Контакт</a></li>
				<li><a href="tests" id="7">Тест по дисциплине</a></li>
				<li><a href="history" id="8 ">История просмотра</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
    <?php include $_SERVER['DOCUMENT_ROOT']."/assets/php/test_script.php"; ?>
	<FORM name="test" METHOD="post">
			<fieldset class="contact">
				<legend>Контактная информация</legend>
				<p><label>ФИО</label><input name="fio" type="text" size="50" ></p>
				<p><label>Группа</label>
					<select name="groups" class="group">
						<optgroup label="1 курс">
							<option value="11">ИС-11
							<option value="11">ИС-12
							<option value="11">ИС-13
						</optgroup>
						<optgroup label="2 курс">
							<option value="11">ИС-21
							<option value="11">ИС-22
							<option value="11">ИС-23
						</optgroup>
						<optgroup label="3 курс">
							<option value="11">ИС-31
							<option value="11">ИС-32
							<option value="11">ИС-33
						</optgroup>
						<optgroup label="4 курс">
							<option value="11">ИС-41
							<option value="11">ИС-42
							<option value="11">ИС-43
						</optgroup>
					</select>
				</p>
			</fieldset>
			<fieldset>
				<legend>Тест по дисциплине</legend>
					<p><label> Конкурентные взаимоотношения возникают между:</label>
					<select name="question1" class="group">
						<option selected disabled>Выберите ответ
						<option value="">автотрофами и гетеротрофами
						<option value="question1.number2">симбионтами и паразитами
						<option value="question1.number3">видами со сходными потребностями
					</select>
					</p>
					<p><label>Экосистема – это:</label>
					<textarea name="question2" rows="3" cols="50"></textarea>
					</p>
					<p><label>Потребителями органических веществ в экосистеме являются:</label>
						<input name="question3" type="radio" value="question3.number1">продуценты
						<input name="question3" type="radio" value="question3.number2">консументы
					</p>
			</fieldset>
		<p>
			<input type="submit" value="Отправить">
			<input type="reset" value="Очистить">
		</p>
	</FORM>
	<script>LocalStorage("test");</script>
	<script>SaveToCookies("test");</script>
	<footer>
		<p>&copy; Сидоренко Наталия </p>
	</footer>
</BODY>
</HTML>
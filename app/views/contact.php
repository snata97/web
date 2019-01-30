<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Контакты
		</title>	
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link href="/assets/css/my_style.css" rel="stylesheet">
		<link href="/assets/css/calendar.css" rel="stylesheet">
		<link href="/assets/css/style_for_modal.css" rel="stylesheet">
		<script src="/assets/js/script_for_my_interests.js"></script>
		<script src="/assets/js/script_for_date.js"></script>
		<script src="/assets/js/script_for_home_page.js"></script>
		<script src="/assets/js/calendar.js"></script>
		<script src="/assets/js/history.js"></script>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </HEAD>
<BODY> 
<main>
	<header>
		<nav>
			<ul class="menu" id="menu" value="6">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="about_me" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="interests" class="menu_item" id="3" onmouseover="ChangeColor3(),SubMenu(id)" onmouseout="ReChange()">Мои интересы</a>
					<script>CreateSubMenu();</script>
				</li>
				<li><a href="studies" id="4" onmouseover="ChangeColor4()" onmouseout="ReChange()">Учеба</a></li>
				<li><a href="photos" id="5" onmouseover="ChangeColor5()" onmouseout="ReChange()">Фотоальбом</a></li>
				<li><a href="contact" id="6">Контакт</a></li>
				<li><a href="tests" id="7" onmouseover="ChangeColor7()" onmouseout="ReChange()">Тест по дисциплине</a></li>
				<li><a href="history" id="8 ">История просмотра</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
    <?php include $_SERVER['DOCUMENT_ROOT']."/assets/php/contact_script.php"; ?>
	<FORM name="mailex" method="post">
			<fieldset class="contact">
				<legend>Контактная информация</legend>
				<p><label>ФИО</label><input name="fio" id="fio" type="text" size="50" onBlur="Check_FIO(this),Check()" onclick="this.select()"></p>
				<p><label>Дата рождения</label><input id="date" type="text" name="date" onBlur="Check_Date(this),Check()" onclick="showcalendar(this)" readonly="true"></p>
				<p><label>Телефон</label><input name="phone" id="phone" type="text" size="40" onBlur="Check_Phone(this),Check()" onclick="this.select()"></p>
				<p><label>Пол</label>
					<input name="gender" type="radio" value="Мужчина" id="gender" onclick="Check()">Мужчина
					<input name="gender" type="radio" value="Женщина" id="gender" onclick="Check()">Женщина
				</p>
				<p><label>Возраст</label>
					<select name="age" id="age" class="group" onChange="Check()">
						<option selected disabled>Выберите ваш возраст
						<option value="7-" >7-
						<option value="8-14">8-14
						<option value="15-21">15-21
						<option value="22-27">22-27
						<option value="28-35">28-35
						<option value="36-45">36-45
						<option value="46-55">46-55
						<option value="56-65">56-65
						<option value="66+">66+
					</select>
				</p>
				<p><label>E-mail</label><input name="email" id="email" type="email" size="50" onBlur="Check_Email(this),Check()" onclick="this.select()"></p>
			</fieldset>
			<fieldset class="message">
				<legend>Поле ввода сообщения</legend>
					<textarea name="comment" id="comment" rows="5" cols="50" onBlur="Check_Text(this),Check()" onclick="this.select()" ></textarea>
			</fieldset>
		<p>
			<input type="submit" id="submit" value="Отправить">
			<input type="button" class="js-button-campaign" value="Очистить">
		</p>
	</FORM>
		<footer>
			<p>&copy; Сидоренко Наталия </p>
		</footer>
	</main>
	<script src="modal_window.js"></script>
	<script src="popover.js"></script>
	<script>LocalStorage("contact");</script>
	<script>SaveToCookies("contact");</script>
</BODY>
</HTML>
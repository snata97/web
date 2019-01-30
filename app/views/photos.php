<!DOCTYPE html>
<HTML lang="ru">
	<HEAD>
		<meta charset="UTF-8">
		<title>
			Персональный сайт Сидоренко Наталии. Фотоальбом
		</title>
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/my_style.css">
		<link href="/assets/css/style_for_modal.css" rel="stylesheet">
		<script src="/assets/js/script_for_my_interests.js"></script>
		<script src="/assets/js/script_for_date.js"></script>
		<script src="/assets/js/script_for_home_page.js"></script>
		<script src="/assets/js/history.js"></script>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</HEAD>
<BODY>
	<main>
	<header>
		<nav>
			<ul class="menu" id="menu" value="5">
				<li><a href="home" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
	</main>
    <div>
        <?php
            include $_SERVER['DOCUMENT_ROOT']."/assets/php/photo_script.php";
            output_photos();
        ?>
    </div>
	<footer>
		<p>&copy; Сидоренко Наталия </p>
	</footer>
	<script>LocalStorage("album");</script>
</BODY>
</HTML>
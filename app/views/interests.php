
	<header>
		<nav>
			<ul class="menu" id="menu_interests" value="3">
				<li><a href="/home/index" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
				<li><a href="/about/index" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="/interests/index" class="menu_item" id="3" onmouseover="SubMenu(id)">Мои интересы</a>
					<script>CreateSubMenu();</script>
				</li>
				<li><a href="/studies/index" id="4" onmouseover="ChangeColor4()" onmouseout="ReChange()">Учеба</a></li>
				<li><a href="/photos/index" id="5" onmouseover="ChangeColor5()" onmouseout="ReChange()">Фотоальбом</a></li>
				<li><a href="/contact/index" id="6" onmouseover="ChangeColor6()" onmouseout="ReChange()">Контакт</a></li>
				<li><a href="/test/index" id="7" onmouseover="ChangeColor7()" onmouseout="ReChange()">Тест по дисциплине</a></li>
				<li><a href="/history/index" id="8 ">История просмотра</a></li>
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
                    Interests($model->hobby);
                ?>
			</ol>
		<p id="p2">Любимые сериалы</p>
			<ol class="interes">
                <?php
			        Interests($model->serials);
                ?>
			</ol>
		<p id="p3">Любимая музыка</p>
			<ol class="interes">
                <?php
				    Interests($model->music);
			    ?>
			</ol>
		<p id="p4">Любимые компьютерные игры</p>
			<ol class="interes">
                <?php
				    Interests($model->games);
				?>
			</ol>
		<p id="p5">Спорт</p>
			<ol class="interes">
			    <?php
			        Interests($model->sport);
			    ?>
			</ol>
	</div>

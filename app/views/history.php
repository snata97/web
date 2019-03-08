
	<header>
		<nav>
			<ul class="menu" id="menu" value="1">
				<li><a href="/home/index" id="1">Главная</a></li>
				<li><a href="/about/index" id="2" onmouseover="ChangeColor2()" onmouseout="ReChange()">Обо мне</a></li>
				<li id="li_3"><a href="/interests/index" class="menu_item" id="3" onmouseover="ChangeColor3(),SubMenu(id)" onmouseout="ReChange()">Мои интересы</a>
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
    <script>CreateTableCurrentHistory();CreateTableAllTimeHistory();</script>
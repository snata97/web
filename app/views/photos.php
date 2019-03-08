
	<main>
	<header>
		<nav>
			<ul class="menu" id="menu" value="5">
				<li><a href="/home/index" id="1" onmouseover="ChangeColor1()" onmouseout="ReChange()">Главная</a></li>
			</ul>
			<span id="time"><script>showdate();</script></span>
		</nav>
	</header>
	</main>
    <div>
        <?php
            output_photos($model);
        ?>
    </div>

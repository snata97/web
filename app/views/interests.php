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
                     Interests($model->get_hobby());
                ?>
			</ol>
		<p id="p2">Любимые сериалы</p>
			<ol class="interes">
                <?php
                    Interests($model->get_serials());
                ?>
			</ol>
		<p id="p3">Любимая музыка</p>
			<ol class="interes">
                <?php
                    Interests($model->get_music());
			    ?>
			</ol>
		<p id="p4">Любимые компьютерные игры</p>
			<ol class="interes">
                <?php
                    Interests($model->get_games());
				?>
			</ol>
		<p id="p5">Спорт</p>
			<ol class="interes">
			    <?php
                    Interests($model->get_sport());
			    ?>
			</ol>
	</div>

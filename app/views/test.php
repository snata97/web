	<FORM name="test" METHOD="post" action="validate">
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
						<option value="автотрофами и гетеротрофами">автотрофами и гетеротрофами
						<option value="симбионтами и паразитами">симбионтами и паразитами
						<option value="видами со сходными потребностями">видами со сходными потребностями
					</select>
					</p>
					<p><label>Экосистема - это функциональное ... живых организмов и среды их обитания.</label>
					<textarea name="question2" rows="3" cols="50"></textarea>
					</p>
					<p><label>Потребителями органических веществ в экосистеме являются:</label>
						<input name="question3" type="radio" value="продуценты">продуценты
						<input name="question3" type="radio" value="консументы">консументы
					</p>
			</fieldset>
		<p>
			<input type="submit" value="Отправить">
			<input type="reset" value="Очистить">
		</p>
	</FORM>
    <?php
        session_start();
        if(!isset($_SESSION['FIO'])){
            header('Location:test/index');
            exit;
        }
        echo "<div class='tables'>";
        echo "<table>";
            echo "<TR>";
                echo "<TD>";
                    echo "дата";
                echo "</TD>";
                echo "<TD>";
                    echo "ФИО";
                echo "</TD>";
                echo "<TD>";
                    echo "вопрос1";
                echo "</TD>";
                echo "<TD>";
                    echo "вопрос2";
                echo "</TD>";
                echo "<TD>";
                    echo "вопрос3";
                echo "</TD>";
            echo "</TR>";
        $test_data=TestModel::findAll();
        foreach($test_data as $value){
            echo "<TR>";
                echo "<TD>";
                    echo "$value->data";
                echo "</TD>";
                echo "<TD>";
                    echo "$value->fio";
                echo "</TD>";
                echo "<TD>";
                    echo "$value->correct_answer1";
                echo "</TD>";
                echo "<TD>";
                    echo "$value->correct_answer2";
                echo "</TD>";
                echo "<TD>";
                    echo "$value->correct_answer3";
                echo "</TD>";
            echo "</TR>";

        }
        echo "</table></div>"
    ?>
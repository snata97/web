<?php
    echo "<script src='/public/assets/js/calendar.js'></script>";
?>
<FORM name="mailex" method="post" action="validate">
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
            <input type="reset" value="Очистить">
		</p>
	</FORM>
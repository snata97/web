<FORM name="registration" method="post" action="validate">
    <fieldset class="contact">
        <legend>Регистрация</legend>
        <p><label>ФИО</label><input name="fio" id="fio" type="text" size="50" onBlur="Check_FIO(this),Check()" onclick="this.select()"></p>
        <p><label>E-mail</label><input name="email" id="email" type="email" size="50" onBlur="Check_Email(this),Check()" onclick="this.select()"></p>
        <p><label>Логин</label><input name="login" id="fio" type="text" size="50" onBlur="Check_Login(this),Check()" onclick="this.select()"></p>
        <p><label>Пароль</label><input name="password" id="fio" type="password" size="50" onBlur="Check()" onclick="this.select()"></p>
    </fieldset>
    <p>
        <input type="submit" id="submit" value="Зарегистрироваться">
        <input type="reset" value="Очистить">
    </p>
</FORM>
<FORM name="authorization" method="post" action="authenticate">
    <fieldset class="contact">
        <legend>Вход</legend>
        <p><label>Логин</label><input name="login" id="fio" type="text" size="50" onBlur="Check_Login(this),Check()" onclick="this.select()"></p>
        <p><label>Пароль</label><input name="password" id="fio" type="password" size="50" onBlur="Check()" onclick="this.select()"></p>
    </fieldset>
    <p>
        <input type="submit" id="submit" value="Войти">
        <input type="reset" value="Очистить">
        <a href="/registration/index">Перейти к регистрации</a>
    </p>
</FORM>
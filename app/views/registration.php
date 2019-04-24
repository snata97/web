<FORM name="registration" method="post" action="validate" enctype="application/x-www-form-urlencoded">
    <fieldset class="contact">
        <legend>Регистрация</legend>
        <p><label>ФИО</label><input name="fio" id="fio" type="text" size="50" onclick="this.select()"></p>
        <p><label>E-mail</label><input name="email" id="email" type="email" size="50" onclick="this.select()"></p>
        <div class="checkLogin">
            <p><label>Логин</label><input name="login" id="login" type="text" size="50" onclick="this.select()"></p>
            <div id="result"></div>
        </div>
        <p><label>Пароль</label><input name="password" id="password" type="password" size="50" onclick="this.select()"></p>
    </fieldset>
    <p>
        <input type="submit" id="submit" value="Зарегистрироваться">
        <input type="reset" value="Очистить">
    </p>
</FORM>
<script src="/public/assets/js/checkLoginAJAX.js"></script>
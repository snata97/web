<!DOCTYPE html>
<HTML lang="ru">
<HEAD>
    <meta charset="UTF-8">
    <title>
        <?=$title ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/my_style.css">
    <script src="/public/assets/js/jquery-3.3.1.js"></script>
    <script src="/public/assets/js/script_for_date.js"></script>
</HEAD>
<BODY>
<main>
    <header>
        <nav>
            <ul class="menu" id="menu">
                <li><a href="/admin/guestBook/uploadFile">Загрузка сообщений гостевой книги</a></li>
                <li><a href="/admin/blog/edit">Редактор блога</a></li>
                <li><a href="/admin/statistic/index">Статистика посещений</a></li>
                <?php
                if(!isset($_SESSION['isAdmin'])){
                    echo "<li><a href='/admin/authorization/index'>Войти</a></li>";
                }
                else {
                    echo "<li><p>Вы вошли как: администратор</p><a href='/admin/authorization/out'>Выйти</a></li>";
                }
                ?>
            </ul>
            <span id="time"><script>showdate();</script></span>
        </nav>
    </header>
</main>
    <?php
        include 'app/admin/views/'.$content_view;
    ?>
<script>LocalStorage("<?=$name_page ?>");</script>
<script>setCookie("<?=$name_page ?>");</script>
<footer>
    <p>&copy; Сидоренко Наталия </p>
</footer>
</BODY>
</HTML>
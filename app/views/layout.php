<?php
session_start();
?>
<!DOCTYPE html>
<HTML lang="ru">
<HEAD>
    <meta charset="UTF-8">
    <title>
        Персональный сайт Сидоренко Наталии. <?=$title ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/my_style.css">
    <script src="/public/assets/js/script_for_home_page.js"></script>
    <script src="/public/assets/js/script_for_date.js"></script>
    <script src="/public/assets/js/history.js"></script>
    <!--<script src="/public/assets/js/calendar.js"></script>-->
    <?php include $_SERVER['DOCUMENT_ROOT']."/public/assets/php/script_for_photos.php"?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/public/assets/php/script_for_interests.php"?>
    <script src="/public/assets/js/jquery-3.3.1.js"></script>
</HEAD>
<BODY>
<main>
    <header>
        <nav>
            <ul class="menu" id="menu">
                <li><a href="/home/index">Главная</a></li>
                <li><a href="/about/index">Обо мне</a></li>
                <li id="li_3"><a href="/interests/index" class="menu_item">Мои интересы</a>
                    <script>CreateSubMenu();</script>
                </li>
                <li><a href="/studies/index">Учеба</a></li>
                <li><a href="/photos/index">Фотоальбом</a></li>
                <li><a href="/contact/index">Контакт</a></li>
                <li><a href="/test/index">Тест по дисциплине</a></li>
                <li><a href="/guestBook/index">Гостевая книга</a></li>
                <li><a href="/blog/index">Блог</a></li>
                <li><a href="/history/index">История</a></li>
                <?php
                    if(!isset($_SESSION['FIO'])){
                        echo "<li><a href='/authorization/index'>Войти</a></li>";
                    }
                    else {
                        echo "<li><p>Вы вошли как: ".$_SESSION['FIO']."</p><a href='/authorization/out'>Выйти</a></li>";
                    }
                ?>
            </ul>
            <span id="time"><script>showdate();</script></span>
        </nav>
    </header>
</main>
    <?php
        include 'app/views/'.$content_view;
        include_once $_SERVER['DOCUMENT_ROOT'].'/app/models/StatisticModel.php';
        $statistic = new StatisticModel();
        $statistic->save_statistic($name_page);
    ?>
<script>LocalStorage("<?=$name_page ?>");</script>
<script>setCookie("<?=$name_page ?>");</script>
<footer>
    <p>&copy; Сидоренко Наталия </p>
</footer>
</BODY>
</HTML>
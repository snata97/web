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
    <script src="/public/assets/js/calendar.js"></script>
</HEAD>
<BODY>
    <?php
        include 'app/views/'.$content_view;
    ?>
<script>LocalStorage("<?=$name_page ?>");</script>
<script>setCookie("<?=$name_page ?>");</script>
<footer>
    <p>&copy; Сидоренко Наталия </p>
</footer>
</BODY>
</HTML>
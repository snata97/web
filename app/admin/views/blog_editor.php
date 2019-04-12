<!DOCTYPE html>
<HTML lang="ru">
<HEAD>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/my_style.css">
    <script src="/public/assets/js/jquery-3.3.1.js"></script>
</HEAD>
<BODY>
<main>
    <FORM name="blog" method="post" action="/blog/upload" enctype="multipart/form-data">
        <p><label>Тема</label><input id="title" type="text" name="title" onBlur="Check()" onclick="this.select()"></p>
        <p><label>Изображение</label><input type="file" name="image"></p>
        <p><label>Текст</label><textarea name="text" id="text" rows="5" cols="50" onBlur="Check_Text(this),Check()" onclick="this.select()" ></textarea>
        <p>
            <input type="submit" id="submit" value="Загрузить">
            <input type="reset" value="Очистить">
        </p>
    </FORM>
</main>
</BODY>
</HTML>

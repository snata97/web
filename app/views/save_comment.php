<?php
    $file=fopen("messages.inc","a+");
    $text=date('d.m.y').','.$_POST["fio_guest_book"].",".$_POST["email_guest_book"].",".$_POST["comment_guest_book"].";";
    if(fwrite($file,$text)){
        echo "запись прошла успешно";
    }
    else{
        echo "произошла ошибка при записи данных";
    }
    fclose($file);
?>
<section>
    <a href="/<?=$name_page ?>/index">Вернуться назад</a>
</section>

<?php
   $source = $_FILES["messages"]["tmp_name"];
   $dest = $_FILES["messages"]["name"];
   if(copy($source,$dest)){
       echo "Файл успешно загружен";
   }
   else{
       echo "Ошибка загрузки файла";
   }
?>
<section>
    <a href="/admin/<?=$name_page ?>/upload">Вернуться назад</a>
</section>

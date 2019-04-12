<?php
    $model->validate($_POST,"blog");
    if($model->validator->getCountErrors()==0){
        $blog = new BlogModel();
        $blog->title = $_POST['title'];
        $blog->body = $_POST['text'];
        $blog->data = date('Y-m-d')." ".date("H:i");
        if($source = $_FILES["image"]["tmp_name"]){
            $dest = $_FILES["image"]["name"];
            if(copy($source,"uploads/".$dest)){
                $blog->image = $_FILES["image"]["name"];
                echo "Файл успешно загружен";
            }
            else{
                echo "Ошибка загрузки файла";
            }
        }
        $blog->save();
    }
    else echo $model->validator->showErrors();
?>
<section>
    <a href="/<?=$name_page ?>/edit">Вернуться назад</a>
</section>

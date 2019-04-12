<?php
    $max_page=10;
    $quantity=BlogModel::countRecords();
    if($quantity<=20){
        $per_page=2;
    }
    else{
        $per_page=ceil($quantity/$max_page);
    }
    $page=(int)(isset($_GET['page'])?($_GET['page']-1):0);

    //Вычисляем первый операнд для LIMIT
    $start = abs($page*$per_page);
    
    //if($page==10) $per_page=$quantity;

    $blog_data = BlogModel::getRecords($start,$per_page);
    foreach($blog_data as $value) {
        echo "<div class='title_blog'><p>$value->data</p><h2>$value->title</h2></div>";
        echo "<div class='blog'>";
        if ($value->image) {
            echo "<div class='blog_photo decor-photo'><img src='/uploads/$value->image' alt='Здесь должно быть фото'></div>";
        }
        echo "<div class='blog_body'><p>$value->body</p></div>";
        echo "</div>";
        echo "<hr>";
    }
    $num_pages = ceil($quantity/$per_page);
    echo "<div class='blog_link_string'>";
    echo "<div><p>Страницы:</p></div>";
    for($i=1;$i<=$num_pages;$i++){
        if($i-1==$page){
            echo "<div><p>".$i."</p></div>";
        }
        else{
            echo "<div><p>".'<a href="/blog/index?page='.$i.'">'.$i.'</a>'."</p></div>";
        }
    }
    echo "</div>";
?>
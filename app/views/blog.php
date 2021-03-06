<script src="/public/assets/js/Blog.js"></script>
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

    $blog_data = BlogModel::getRecords($start,$per_page);
    $blog_comments=CommentBlogSaveModel::findAll();
    foreach($blog_data as $value) {
        echo "<div class='blogs' id='$value->id'>";
                echo "<div class='body_blog'>";
                    echo "<div class='title_blog'><p>$value->data</p><h2>$value->title</h2></div>";
                    echo "<div class='blog'>";
                        if ($value->image) {
                            echo "<div class='blog_photo decor-photo'><img src='/uploads/$value->image' alt='Здесь должно быть фото'></div>";
                        }
                        echo "<div class='blog_body'><p>$value->body</p></div>";
                    echo "</div>";
                    if(isset($_SESSION["FIO"])){
                        echo "<button id='$value->id' class='add_comment' onclick='generateCommentDiv($value->id)'>Добавить комментарий</button>";
                    }
                echo "</div>";
                echo "<div class='comments'><p>Комментарии: </p>";
                $entry_id=$value->id;
                if(is_array($blog_comments)){
                    foreach($blog_comments as $value){
                        if($entry_id==$value->id_blog){
                            echo "<div class='comments_output'>";
                            echo "<p>$value->data</p><p>$value->autor</p><div>$value->comment</div></div>";
                        }
                    }
                }
            echo "</div>";
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
<?php
    $max_page=10;
    $quantity=StatisticModel::countRecords();
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

    $blog_data = StatisticModel::getRecords($start,$per_page);

    echo "<div class='tables'>";
        echo "<br>";
        echo "<table>";
        echo "<TR>";
            echo "<TD>";
                echo "дата";
            echo "</TD>";
            echo "<TD>";
                echo "веб-страница";
            echo "</TD>";
            echo "<TD>";
                echo "ip-адрес";
            echo "</TD>";
            echo "<TD>";
                echo "имя хоста";
            echo "</TD>";
            echo "<TD>";
                echo "браузер";
            echo "</TD>";
        echo "</TR>";
    foreach($blog_data as $value){
            echo "<TR>";
            echo "<TD>";
                echo "$value->time_statistic";
            echo "</TD>";
            echo "<TD>";
                echo "$value->web_page";
            echo "</TD>";
            echo "<TD>";
                echo "$value->ip_address";
            echo "</TD>";
            echo "<TD>";
                echo "$value->host_name";
            echo "</TD>";
            echo "<TD>";
                echo "$value->browser_name";
            echo "</TD>";
            echo "</TR>";
    }
    echo "</table></div>";
    $num_pages = ceil($quantity/$per_page);
    echo "<div class='blog_link_string'>";
    echo "<div><p>Страницы:</p></div>";
    for($i=1;$i<=$num_pages;$i++){
        if($i-1==$page){
            echo "<div><p>".$i."</p></div>";
        }
        else{
            echo "<div><p>".'<a href="/admin/statistic/index?page='.$i.'">'.$i.'</a>'."</p></div>";
        }
    }
    echo "</div>";
?>
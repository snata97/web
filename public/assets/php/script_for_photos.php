<?php

function output_photos($fotos,$titles){
    $counter_titles = 0;
    $counter_fotos = 0;
    $countTitles = count($titles);
    $countFotos = count($fotos);
    $dir="/public/assets/img/";
    echo "<div class=\"image-decor\"><table>";
    for ($i = 0; $i < 4; $i++) {
        echo "<TR class=\"decor-photo\">";
        for ($j = 0; $j < 4 && $counter_fotos < $countFotos; $counter_fotos++, $j++) {
            $path=$dir.$fotos[$counter_fotos];
            $number_photo=($counter_fotos + 1);
            echo "<TD><img src=\"$path\" alt=\"Здесь должно быть фото $number_photo\" title=\"".$titles[$counter_fotos]."\"></TD>";
        }
        echo "<TR class=\"photo-title-decor\">";
        for ($k = 0; $k < 4 && $counter_titles < $countTitles; $counter_titles++, $k++) {
            echo "<TD>".$titles[$counter_titles]."</TD>";
        }
    }
    echo "</table></div>";
}
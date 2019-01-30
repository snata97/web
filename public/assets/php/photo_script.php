<?php
global $fotos,$titles,$fotos_big;
$fotos=["photo1.jpg","photo2.jpg","photo3.jpg","photo4.jpg","photo5.jpg","photo6.jpg","photo7.jpg","photo8.jpg","photo9.jpg","photo10.jpg","photo11.jpg","photo12.jpg","photo13.jpg","photo14.jpg","photo15.jpg"];
$titles=["Брусника","Черника","Иван-чай","Сыроежка","Береза","В лесу","Вид из Воронцовского дворца","Возле Воронцовского дворца","В новом аэропорту г.Симферополь","Стоянка аэропорта г.Симферополь","После ледяного дождя","Пляж 'Парк Победы'","Лебеди в Бухте Омега","Морозный узор","Обь в г.Сургут"];
$fotos_big=["1photo1_big.jpg","2photo2_big.jpg","3photo3_big.jpg","4photo4_big.jpg","5photo5_big.jpg","6photo6_big.jpg","7photo7_big.jpg","8photo8_big.jpg","9photo9_big.jpg","10photo10_big.jpg","11photo11_big.jpg","12photo12_big.jpg","13photo13_big.jpg","14photo14_big.jpg","15photo15_big.jpg"];

function output_photos()
{
    global $fotos,$titles,$fotos_big;
    $counter_titles = 0;
    $counter_fotos = 0;
    $countTitles = count($titles);
    $countFotos = count($fotos);
    $dir="/assets/img/";
    echo "<div class=\"image-decor\"><table>";
    for ($i = 0; $i < 4; $i++) {
        echo "<TR class=\"decor-photo\">";
        for ($j = 0; $j < 4 && $counter_fotos < $countFotos; $counter_fotos++, $j++) {
            $path=$dir.$fotos[$counter_fotos];
            $number_photo=($counter_fotos + 1);
            echo "<TD><img src=\"$path\" alt=\"Здесь должно быть фото $number_photo\" title=\"titles[$counter_fotos]\"></TD>";
        }
        echo "<TR class=\"photo-title-decor\">";
        for ($k = 0; $k < 4 && $counter_titles < $countTitles; $counter_titles++, $k++) {
            echo "<TD>\"$titles[$counter_titles]\"</TD>";
        }
    }
    echo "</table></div>";
}




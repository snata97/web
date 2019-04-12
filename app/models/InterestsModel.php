<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 02.03.19
 * Time: 15:16
 */

include("app/core/BaseActiveRecord.php");


class InterestsModel extends BaseActiveRecord
{
    public $hobby=["Вышивка крестом","Квиллинг", "Пазлы"];
    public $serials = ["Pride & Prejudice","The Big Bang Theory","Sherlok",
        "How i met your mother","Friends","Интерны","Кухня","Desperate Housewives",
        "Game of Thrones","Westworld","Сваты"];
    public $music = ["Alexandre Desplat - The Meadow","Kaleo - Way Down We Go",
"Ray Charles - Hit the road, Jack","Pompeya - 90","Adam Lambert - Mad World",
"Дэвид Арнольд & Майкл Прайс - The Game is On","Mattew Clark,James David Pickering - Sirens","Muse - Supermassive Black Hole",
"Imagine Dragons - Natural","Imagine Dragons - Believer","Alphaville - Forever young",
"Dorian - La Tormenta","Twenty one pilots - Heathens","Алексеев - Пьяное солнце",
"Звери - Районы-кварталы","The Hatters - Зима","SHANGUY - La Louze",
"Фредерик Шопен - Осенний вальс","Ace of base - All that she wants"];
    public $games = ["The Sims 4","Spore","Asphalt"];
    public $sport = ["Плавание","Катание на коньках","Катание на лыжах"];

    public function get_hobby(){
        return $this->hobby;
    }
    public function get_serials(){
        return $this->serials;
    }
    public function get_music(){
        return $this->music;
    }
    public function get_games(){
        return $this->games;
    }
    public function get_sport(){
        return $this->sport;
    }
}
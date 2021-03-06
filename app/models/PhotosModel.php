<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 02.03.19
 * Time: 15:16
 */

include("app/core/BaseActiveRecord.php");

class PhotosModel extends BaseActiveRecord
{
    private $fotos=["photo1.jpg","photo2.jpg","photo3.jpg","photo4.jpg","photo5.jpg","photo6.jpg","photo7.jpg","photo8.jpg","photo9.jpg","photo10.jpg","photo11.jpg","photo12.jpg","photo13.jpg","photo14.jpg","photo15.jpg"];
    private $titles=["Брусника","Черника","Иван-чай","Сыроежка","Береза","В лесу","Вид из Воронцовского дворца","Возле Воронцовского дворца","В новом аэропорту г.Симферополь","Стоянка аэропорта г.Симферополь","После ледяного дождя","Пляж 'Парк Победы'","Лебеди в Бухте Омега","Морозный узор","Обь в г.Сургут"];
    private $fotos_big=["1photo1_big.jpg","2photo2_big.jpg","3photo3_big.jpg","4photo4_big.jpg","5photo5_big.jpg","6photo6_big.jpg","7photo7_big.jpg","8photo8_big.jpg","9photo9_big.jpg","10photo10_big.jpg","11photo11_big.jpg","12photo12_big.jpg","13photo13_big.jpg","14photo14_big.jpg","15photo15_big.jpg"];

    public function get_fotos(){
        return $this->fotos;
    }
    public function get_titles(){
        return $this->titles;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 02.03.19
 * Time: 8:02
 */


class View
{
    function render($content_view,$title,$name_page,$model=NULL,$layout = 'layout.php')
    {
        include 'app/views/'.$layout;
    }

}
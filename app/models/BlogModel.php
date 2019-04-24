<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 29.03.19
 * Time: 11:18
 */

include_once("app/core/BaseActiveRecord.php");
include('config.inc.php');

class BlogModel extends BaseActiveRecord
{
    public $id;
    public $title;
    public $data;
    public $body;
    public $image;
    protected static $table = 'blog';

    function __construct(){
        parent::__construct();
    }
}
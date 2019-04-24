<?php

include_once("app/core/BaseActiveRecord.php");
include('config.inc.php');

class CommentBlogSaveModel extends BaseActiveRecord
{
    public $id;
    public $id_blog;
    public $data;
    public $autor;
    public $comment;
    protected static $table = 'commentsBlog';

    function __construct(){
        parent::__construct();
    }
}
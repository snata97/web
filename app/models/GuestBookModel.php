<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 29.03.19
 * Time: 11:18
 */

include("app/core/BaseActiveRecord.php");

class GuestBookModel extends BaseActiveRecord
{
    public $id;
    public $name;
    public $email;
    public $msg_for_formValidation;
    protected static $table = 'quest_book';
}
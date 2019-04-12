<?php

include("app/core/BaseActiveRecord.php");
include('config.inc.php');

class RegistrationModel extends BaseActiveRecord
{
    public $id;
    public $fio;
    public $email;
    public $login;
    public $password;
    public $msg_for_formValidation;
    protected static $table = 'user';

    function __construct(){
        parent::__construct();
    }
}
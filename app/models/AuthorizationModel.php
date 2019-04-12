<?php

include("app/core/BaseActiveRecord.php");
include('config.inc.php');

class AuthorizationModel extends BaseActiveRecord
{
    public $msg_for_formValidation;
    protected static $table = 'user';

    function __construct(){
        parent::__construct();
    }
}
<?php

include("app/core/BaseActiveRecord.php");
include("app/models/validators/ResultVerification.php");
include('config.inc.php');

class TestModel extends BaseActiveRecord
{
    public $id;
    public $groupa;
    public $data;
    public $fio;
    public $question1;
    public $question2;
    public $question3;
    public $correct_answer1;
    public $correct_answer2;
    public $correct_answer3;
    public $msg_for_formValidation;

    protected static $table='test';

    function __construct(){
        parent::__construct();
    }

}
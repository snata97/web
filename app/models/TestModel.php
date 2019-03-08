<?php

include("app/core/Model.php");
include("app/models/validators/ResultVerification.php");

class TestModel extends Model
{
    function __construct(){
        parent::__construct();
        $this->validator = new ResultVerification();
    }
    function validate($post_data, $form_name)
    {
        parent::validate($post_data, $form_name);
        $this->validator->checkTest($this->post_data);
    }
}
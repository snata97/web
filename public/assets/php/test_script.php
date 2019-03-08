<?php

/*include("../app/core/FormValidation.php");
include("../app/core/ResultVerification.php");*/
include("app/core/TestControllerphp");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $this->model->validate($_POST);
    $validator = new FormValidation();
    $test_check = new ResultVarification();
    $errors=$validator->validate($_POST,"test");
    echo $validator->showErrors();
    if(!$errors) {
        $test_check->checkTest($_POST);
        echo $test_check->showErrors();
    }
}
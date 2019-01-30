<?php

include("../app/core/FormValidation.php");
include("../app/core/ResultVarification.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $validator = new FormValidation();
    $test_check = new ResultVarification();
    $validator->setRule('fio',"/^[A-zА-я]{1,}[\s][A-zА-я]{1,}[\s][A-zА-я]{1,}$/u");;
    $errors=$validator->validate($_POST,"test");
    echo $validator->showErrors();
    if(!$errors) {
        $test_check->checkTest($_POST);
        echo $test_check->showErrors();
    }
}
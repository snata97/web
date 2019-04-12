<?php

include("app/core/Controller.php");

class ContactController extends Controller
{
    public function index(){
        echo $this->view->render("contact.php","Контакты","contact");
    }
    public function validate(){
        $this->model->validate($_POST,"mailex");
        if($this->model->validator->getCountErrors()==0){
            $this->model->msg_for_formValidation="Ваше сообщение отправлено";
        }
        echo $this->view->render("validate.php","Контакты","contact",$this->model);
    }

}
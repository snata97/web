<?php



class ResultVarification extends FormValidation
{
    public function checkTest($post_array){
        $valid=true;
        if($post_array['question1']!="question1.number3") {
            $this->errors["первый ответ"] = "Неверно";
        }
        if($post_array['question3']!="question3.number2"){
            $this->errors["третий ответ"] = "Неверно";
        }
    }
    public function showErrors(){
        $errors="<div id='valid'";
        if(count($this->errors)==0){
            $errors.="<p style='color: green; font-size: 22px;'> Тест пройден! </p>";;
        }
        else{
            foreach($this->errors as $error => $value)
                $errors.="<p style='color: red; font-size: 22px;'> Ошибка! ".$error." : ".$value."</p>";
        }
        return $errors."</div>";
    }
}
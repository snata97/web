<?php

class ResultVerification extends FormValidation
{
    public function checkTest($post_array){
        if(!$post_array['question3']){
            $this->errors["третий ответ"] = "не выбран";
        }
        if(count($this->errors)==0){
            $test = new TestModel();
            $test->groupa = $post_array['groups'];
            $test->fio = $post_array['fio'];
            $test->data = date('d.m.y');
            $test->question1 = $post_array['question1'];
            $test->question2 = $post_array['question2'];
            $test->question3 = $post_array['question3'];
            if ($post_array['question1'] != "видами со сходными потребностями") {
                $test->correct_answer1 = "Неверно";
                $this->errors["первый ответ"] = "Неверно";
            }
            else{
                $test->correct_answer1 = "Верно";
            }
            if ($post_array['question2'] != "единство") {
                $test->correct_answer2 = "Неверно";
                $this->errors["второй ответ"] = "Неверно";
            }
            else{
                $test->correct_answer2 = "Верно";
            }
            if ($post_array['question3'] != "консументы") {
                $test->correct_answer3 = "Неверно";
                $this->errors["третий ответ"] = "Неверно";
            }
            else{
                $test->correct_answer3 = "Верно";
            }
            $test->save();
        }
       /* else {
            if ($post_array['question1'] != "question1.number3") {
                $this->errors["первый ответ"] = "Неверно";
            }
            if ($post_array['question2'] != "единство") {
                $this->errors["второй ответ"] = "Неверно";
            }
            if ($post_array['question3'] != "question3.number2") {
                $this->errors["третий ответ"] = "Неверно";
            }
        }*/

    }
    public function showErrors(){
        $errors="<div id='valid'";
        if(count($this->errors)==0){
            $errors.="<p style='color: green; font-size: 22px;'> Тест пройден! </p>";
        }
        else{
            foreach($this->errors as $error => $value)
                $errors.="<p style='color: red; font-size: 22px;'> Ошибка! ".$error." : ".$value."</p>";
        }
        return $errors."</div>";
    }
}
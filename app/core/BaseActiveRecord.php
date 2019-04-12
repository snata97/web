<?php

include("app/core/Model.php");

abstract class BaseActiveRecord extends Model
{
    public static $pdo;

    public static function find($id){
        $query = 'SELECT * FROM '.static::$table.' WHERE id=:id';
        $s = self::$pdo->prepare($query);
        $s->bindParam(':id',$id);
        $s->execute();
        $row=$s->fetch(PDO::FETCH_ASSOC);
        if(!$row){
            return null;
        }
        $ar=new static();
        foreach($row as $key=>$value){
            $ar->$key = $value;
        }
        return $ar;
    }
    public static function findAll(){
        $query = 'SELECT * FROM '.static::$table;
        $stmt = self::$pdo->prepare($query);
        $stmt->execute();
        $ar=$stmt->fetchAll(PDO::FETCH_CLASS);
        if(!$ar){
            return null;
        }
        return $ar;
    }
    public function save(){
        $query = 'SHOW COLUMNS FROM '.static::$table;
        $s = self::$pdo->prepare($query);
        $s->execute();

        while($i = $s->fetch(PDO::FETCH_ASSOC))
        {
            if($i["Field"]=="id") continue;
            $fields[] = $i["Field"];//поля
        }

        $array_obj = get_object_vars($this);

        foreach($fields as $value ) {
            if($value=='id') continue;//id
            $values[]="'$array_obj[$value]'";//значения
            $fields_columns[]="`$value`";
            $update_array[]="'$array_obj[$value]'=`$value`";//для обновления
        }

        if ($array_obj['id']==NULL){
            $query_create = 'INSERT INTO `'.static::$table.'` ('.implode(",", $fields_columns).') VALUES ('.implode(",", $values).')';
            $stmt = self::$pdo->prepare($query_create);
           /* var_dump($stmt);*/
            try {
                $stmt->execute();
                /*$stmt->debugDumpParams();*/
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        else {
            $query_update = 'UPDATE ' . static::$table . ' SET '.join(', ',$update_array).' WHERE id=:id';
            $s = self::$pdo->prepare($query_update);
            $s->bingParam(':id',$this->id);
            $s->execute();
        }
        return $this;
    }
    public function delete(){
        $query = 'DELETE FROM'.static::$table.' WHERE id=:id';
        $s = self::$pdo->prepare($query);
        $s->bindParam(':id',$this->id);
        $s->execute();
        return true;
    }
    public static function countRecords(){
        $query = 'SELECT count(*) FROM '.static::$table;
        $s = self::$pdo->query($query)->fetchColumn();
        return $s;
    }
    public static function getRecords($start,$per_page){

            $query = "SELECT * FROM " . static::$table . " ORDER BY id DESC LIMIT $start,$per_page";
            $s = self::$pdo->prepare($query);
            try {
                $s->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            $ar = $s->fetchAll(PDO::FETCH_CLASS);
            if (!$ar) {
                return null;
            }
            return $ar;
        
    }
    public function findLogin($login){
        $query = "SELECT COUNT(*) FROM ".static::$table." WHERE login = '$login'";
        $s = self::$pdo->query($query)->fetchColumn();
        if($s){
            return -1;
        }
        else{
            return 0;
        }
    }
    public function LogIn($login,$password){
        $query = "SELECT * FROM ".static::$table." WHERE login = :login";
        $s = self::$pdo->prepare($query);
        $s->bindParam(':login',$login);
        $s->execute();
        $row=$s->fetch(PDO::FETCH_ASSOC);
        if($row){
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION["FIO"]=$row['fio'];
                return 1;
            }
            else{
                return -1;
            }
        }
        return 0;
    }
}
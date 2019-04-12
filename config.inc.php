<?php

$dsn = 'mysql:dbname=my_site_db;host=127.0.0.1';
$username = 'tasha';
$password = 'snata260597';
try{
    BaseActiveRecord::$pdo=new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $e){
    echo 'Подключение не удалось: '.$e->getMessage();
}
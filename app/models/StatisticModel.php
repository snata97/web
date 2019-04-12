<?php
/**
 * Created by PhpStorm.
 * User: tasha
 * Date: 02.03.19
 * Time: 15:16
 */

include_once("app/core/BaseActiveRecord.php");
include('config.inc.php');

class StatisticModel extends BaseActiveRecord
{
    protected static $table='statistic';
    public $id;
    public $time_statistic;
    public $web_page;
    public $ip_address;
    public $host_name;
    public $browser_name;

    function __construct(){
        parent::__construct();
    }

    function save_statistic($page){
        $this->time_statistic=date('Y-m-d H:m:s');
        $this->web_page = $page;
        $this->ip_address = $_SERVER['REMOTE_ADDR'];
        $this->host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $this->browser_name = $_SERVER['HTTP_USER_AGENT'];
        $this->save();
    }
}
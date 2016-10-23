<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/10/23
 * Time: 8:08
 */

//DB接続
function db_con(){
    try{
        return new PDO('mysql:dbname=LAA0710186-sample;charset=utf8;host=mysql113.phy.lolipop.lan','LAA0710186','kenrad22');
    }catch(PDOException $e){
//        exit("DBconnectingerror:".$e->getMessage());
        echo $e->getMessage();
    }

}


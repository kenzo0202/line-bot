<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/10/23
 * Time: 8:08
 */

//DB接続
function db_con(){
    $dsn = "mysql:dbname=LAA0710186-sample;host=mysql113.phy.lolipop.lan;charset=utf8";
    $username = "LAA0710186";
    $password = "kenrad22";
    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    try{
        return new PDO($dsn,$username,$password,$driver_options);
    }catch(PDOException $e){
//        exit("DBconnectingerror:".$e->getMessage());
        echo $e->getMessage();
    }

}


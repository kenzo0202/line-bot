<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/10/23
 * Time: 8:08
 */

//DB接続
function db_con(){
    $dsn = "mysql:dbname=heroku_ae525adeae5c87b;host=us-cdbr-iron-east-04.cleardb.net;charset=utf8";
    $username = "bf863c5954ec03";
    $password = "a3279383";
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


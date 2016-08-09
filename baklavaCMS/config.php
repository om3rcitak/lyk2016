<?php
/**
 * Created by PhpStorm.
 * User: busra
 * Date: 08.08.2016
 * Time: 09:59
 */


$db = [
    'username' => "root",
    'password' => "13066529015",
    'database' => "baklavacms",
    'server'   => "localhost"
];

$prize = 5;

$conn = mysql_connect($db["server"], $db["username"], $db["password"]) or die("db ye bağlanılamadı");
mysql_select_db($db["database"], $conn) or die("veritabanı seçilemedi");

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
<?php
session_start();
$db = [
    'username' => "root",
    'password' => "root",
    'database' => "siesaref",
    'server'   => "localhost"
];


$conn = mysql_connect($db["server"], $db["username"], $db["password"]) or die("db ye bağlanılamadı");
mysql_select_db($db["database"], $conn) or die("veritabanı seçilemedi");
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
?>
<meta charset="utf-8">

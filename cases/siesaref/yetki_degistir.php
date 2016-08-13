<?php
require "config.php";

$userid = $_GET["user_id"];
$yetki = $_GET["yetki"];
if(isset($_SESSION["user"])){
	if($_SESSION["isadmin"]==1){
	$sql = "UPDATE users SET isadmin=$yetki WHERE id=$userid";
	echo $sql;
	mysql_query($sql);
	echo "yetki başarıyla değiştirildi. lütfen çıkış yapıp tekrar giriş yapın";
	}else{
		echo "admin değilsiniz";
	}
}else{
	echo "henüz giriş yapılmamış";
}


?>


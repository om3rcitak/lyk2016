<?php
echo '<meta charset="utf-8"/>';
$db = [
    'username' => "root",
    'password' => "root",
    'database' => "sabahlama",
    'server'   => "localhost"
];

$conn = mysql_connect($db["server"], $db["username"], $db["password"]) or die("db ye bağlanılamadı");
mysql_select_db($db["database"], $conn) or die("veritabanı seçilemedi");
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");

if(isset($_POST["username"])){
	if($_POST["username"]=="admin" && $_POST["password"]=="admin"){
		//$_SESSION["login"] = "admin";
		setcookie("PHPSESID", "admin");
		echo "giris yaptiniz! sayfayi yenileyin";
	}else{
		echo "yanlis. tekrar deneyin.";
	}
}

if(!isset($_COOKIE["PHPSESID"])){
?>
<!-- START YWRtaW46YWRtaW4 -->
<form action="" method="post">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="">
</form>
<!-- END YWRtaW46YWRtaW4 -->
<?php
}else{
	$row = mysql_fetch_assoc(mysql_query("SELECT * FROM kullanicilar WHERE username='".($_COOKIE["PHPSESID"])."'"));
	echo "hosgeldiniz sayin ".$row["username"]."!";
}
?>
<?php
require "config.php";

if(isset($_POST["username"])){
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$sql = "INSERT INTO users VALUES (NULL, '".htmlspecialchars($username)."', '".$password."', 0)";
	mysql_query($sql);
	echo "sayın $username başarıyla kayıt oldunuz. artık giriş yapabilirsiniz.";
}

?>

<form action="" method="post">
username: <input name="username" type="text" /> <br />
password: <input name="password" type="password" /> <br />
<input type="submit">
</form>

<?php
require "config.php";

if(isset($_POST["username"])){
	$username = mysql_real_escape_string($_POST["username"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT COUNT(*) as count, id, isadmin FROM users WHERE username='$username' AND password='$password'";
	$query = mysql_query($sql);
	
	while($row = mysql_fetch_assoc($query)){
		if($row["count"]==1){
			$_SESSION["user"] = $row["id"];
			$_SESSION["isadmin"] = $row["isadmin"];
		}else{
			print '<script>alert("Kullanıcı bulunamadı!");</script>';
		}
	}

}

?>

<form action="" method="post">
username: <input name="username" type="text" /> <br />
password: <input name="password" type="password" /> <br />
<input type="submit">
</form>

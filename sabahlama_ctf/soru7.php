<?php
session_start();
echo '<meta charset="utf-8"/>';
$flag = "tebrikler! bu soruyu da çözdünüz";
$password = "asdajsfase^^'!+ADSDF''z";
if(isset($_GET['action']) && $_GET['action'] == 'logout') {
	$_SESSION['logged_in'] = false;
}
$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
if(isset($_GET['action']) && $_GET['action'] === 'login') {
	if(isset($_POST['username']) && strcmp($_POST['username'],'admin') == 0 && isset($_POST['password']) && strcmp($_POST['password'],$password) == 0) {
		echo "Logged in.<br/>";
		$logged_in = true;
		$_SESSION['logged_in'] = true;
	} else {
		echo "Login failed.<br/>";
		$logged_in = false;
		$_SESSION['logged_in'] = false;
	}
}
if($logged_in) {
	echo "Flag: " . $flag . "<br/>"; 
	echo "
	<form action=\"?action=logout\" method=\"post\">
		<input type=\"submit\" value=\"Logout\"/>
	</form>
	";
} else {
	echo "
		<form action=\"?action=login\" method=\"post\">
		Username:<br/>
		<input type=\"text\" name=\"username\"/><br/>
		Password:<br/>
		<input type=\"password\" name=\"password\"/><br/>
		<input type=\"submit\" value=\"Login\"/>
		</form>
	";
}
?>
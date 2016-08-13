<meta charset="utf-8">
<?php

/**
 * Created by PhpStorm.
 * User: om3rcitak
 */

$flag = "kangırcıleyşıns, admin yetkisi ile giriş yapmayı başarsınız!!!";

class user
{
    public $name;
    public $salt;
    public $pass;

    public function __construct($name, $pass)
    {
        $this->salt = $name;
        $this->name = md5($name);
        $this->pass = md5($pass);
    }
}

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = new user($_POST['user'], $_POST['pass']);
    if ($_POST['user'] == "admin") {
        echo "admin kullanıcısının şifresi yanlış gardaş :(";
        die();
    }
    $serialize = serialize($user);
    setcookie("PHP_SESSID", $serialize, time() + (60 * 60 * 24));
}

if (isset($_COOKIE["PHP_SESSID"])) {
    $user = $_COOKIE["PHP_SESSID"];
    $user = unserialize($user);
    if ($user->name == md5("admin")) {
        echo $flag;
    } else {
        echo "hoşgeldiniz sayın " . $user->salt;
    }
} else {
    echo '
    Giriş Formu
	<form method="POST" action="">
		Kullanıcı Adı : <input type="text" name="user" /><br/>
		Şifre : <input type="password" name="pass" /><br/>
		<input type="submit" name="action" />
	</form>
    ';
}
?>
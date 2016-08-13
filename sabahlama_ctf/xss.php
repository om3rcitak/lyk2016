<meta charset="utf-8"/>
<?php

/**
 * Created by PhpStorm.
 * User: om3rcitak
 */

if (!isset($_GET["ad"])) {
    echo '
    <form action="">
        Adınızı Girin :
        <input type="text" name="ad" />
        <input type="submit" />
    </form>
    ';
} else {
    $ad = $_GET["ad"];
    $ad = str_replace(array("alert", "script", "/", "onerror", "'", '"'), "", $ad);
    echo "hoşgeldiniz : " . $ad;
}
?>
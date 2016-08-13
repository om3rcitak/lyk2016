<meta charset="utf-8">
<?php

/**
 * Created by PhpStorm.
 * User: om3rcitak
 */

$flag = "kangırcıleyşıns!!!! soruyu çözdünüz";

if (!isset($_POST["time"])) {
    die("dört yüz üç interneyşınıl eror. post metoduna ait time parametresi tanımlanmamış!!1!bir!");
}

$time = $_POST["time"];

if ($time == md5(time())) {
    echo $flag;
} else {
    echo "zaman akıp gidiyor, oooo oo oooooo oo https://www.youtube.com/watch?v=jBmuNMn9VTI";
    echo "<!--" . wordwrap(md5(time()), 4, "-", true) . "-->";
}
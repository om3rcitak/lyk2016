<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: om3rcitak
 */

$user = $_SERVER["HTTP_USER_AGENT"];

if (strstr($user, "google") || strstr($user, "yandex")) {
    echo "kangırcıleyşın, sen bir google veya yandex botusun!";
} else {
    echo "üzgünüm sen normal bir kullanısın :( bana search bot lazım";
}

?>
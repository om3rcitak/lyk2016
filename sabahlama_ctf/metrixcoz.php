<?php

$link = "http://10.47.159.32/ctf/matrix.php";
$read = file_get_contents($link);


$badchars = ["'",";",",",":","\n","\r","`"," ",".","#","+","@"];
$coz = str_replace($badchars, "", $read);
echo $coz."\n";


?>
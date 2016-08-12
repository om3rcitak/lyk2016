<?php
$chars = ["'",";",",",":","\n","\r","`"," ",".","#","+","@"];
$matrix = file_get_contents("http://10.47.159.32/ctf/matrix.php");
foreach($chars as $char)
	$matrix = str_replace($char,"",$matrix);
echo $matrix . "\n";

?>

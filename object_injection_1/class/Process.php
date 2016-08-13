<?php
class Process
{
    protected $pid, $lock, $cmdname;

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

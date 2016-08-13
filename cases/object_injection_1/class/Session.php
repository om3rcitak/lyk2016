<?php
require_once ("Process.php");
require_once ("Database.php");

class Session
{
    protected $name, $lastname, $handle;

    function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->handle = new Database();
    }

    function getName(){
        return $this->name;
    }

    function getLastName(){
        return $this->lastname;
    }

    function __destruct()
    {
        $this->_destroy();
    }

    function _destroy(){
        // TODO: Look at the scrum board.
        $this->handle->close();
    }

}

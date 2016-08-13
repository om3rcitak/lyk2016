<?php
require_once("class/Session.php");

if(!isset($_COOKIE['SESSION'])){
    // There is NO session
    $session = new Session("test", 123);
    setcookie("SESSION", base64_encode(serialize($session)));
    exit("Your do NOT have any session. Refresh the page");
} else {
    try{
        $session = unserialize(base64_decode($_COOKIE['SESSION']));
        exit("Your name is : ".htmlspecialchars($session->getName()) .
            "<br> Your last name is : ". htmlspecialchars($session->getLastName()));
    } catch (Exception $exc) {
        exit("Something went wrong");
    }
}

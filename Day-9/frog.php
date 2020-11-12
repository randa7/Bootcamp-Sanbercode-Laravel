<?php
require_once 'animal.php';
class Frog extends Animal
{
    // Constructor
    function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 4;
    }
    // Method
    function jump()
    {
        echo 'hop hop';
    }
}
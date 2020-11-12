<?php
require_once 'animal.php';
class Ape extends Animal
{
    // Constructor
    function __construct($name)
    {
        parent::__construct($name);
    }
    // Method
    function yell()
    {
        echo 'Auooo';
    }
}
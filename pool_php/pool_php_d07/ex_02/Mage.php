<?php
include_once("Character.php");

class Mage extends Character
{
    public function __construct($name)
    {
        parent::__construct($name, 70, 10, 3, 10, 'Mage');
        echo $name.": May the gods be with me.\n";

    }

    public function __destruct()
    {
        echo $this->_name.": By the four gods, I passed away...\n";
    }

    public function attack()
    {
        echo $this->_name.": Feel the power of my magic!\n";

    }
}
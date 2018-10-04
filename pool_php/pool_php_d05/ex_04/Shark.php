<?php
include_once ("Animal.php");

class Shark extends Animal
{
    private $_frenzy;

    public function __construct($name, $frenzy = false)
    {
        parent::__construct($name, 0, Animal::FISH);
        echo "A KILLER IS BORN !\n";
    }

    public function smellBlood($bool)
    {
        $this->_frenzy = $bool;
    }

    public function status()
    {
    if ($this->_frenzy == true)
        echo $this->_name." is smelling blood and wants to kill.\n";
    else
        echo $this->_name." is swimming peacefully\n";
    }
}
?>
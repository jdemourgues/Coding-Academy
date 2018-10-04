<?php
include_once ("Animal.php");

class Canary extends Animal
{
    private $_eggs;

    public function __construct($name, $eggs = 0)
    {
        parent::__construct($name, 2, Animal::BIRD);
        echo "Yellow and smart ? Here I am !\n";
    }

    public function layEgg()
    {
        $this->_eggs++;
    }

    public function getEggsCount()
    {
        return $this->_eggs;
    }
}
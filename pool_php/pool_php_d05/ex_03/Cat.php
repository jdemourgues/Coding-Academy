<?php
include_once ("Animal.php");

class Cat extends Animal
{
    private $_color;

    public function __construct($name, $color = 'grey')
    {
        parent::__construct($name, 4, Animal::MAMMAL);
        $this->_color=$color;
        echo $this->_name.": MEEEOOWWWW\n";
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function meow()
    {
        echo $this->_name." the ".$this->_color." kitty is meowing.\n";
    }
}
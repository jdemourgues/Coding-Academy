<?php
class Animal
{
    private $_name;
    private $_legs;
    private $_type;

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    public function __construct($name, $legs, $type)
    {
        $this->_name = $name;
        $this->_legs = $legs;
        switch ($type)
        {
            case Animal::MAMMAL:
                $this->_type = 'mammal';
            break;
            case Animal::FISH:
                $this->_type = 'fish';
            break;
            case Animal::BIRD:
                $this->_type = 'bird';
            break;
            default:
                break;
        }
             echo "My name is " . $this-> _name . " and I am a " . $this->_type . " !\n";
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getLegs()
    {
        return $this->_legs;
    }

    public function getType()
    {
        return $this->_type;
    }
}
?>
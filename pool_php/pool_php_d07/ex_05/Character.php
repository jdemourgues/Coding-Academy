<?php
include_once ("IMovable.php");

class Character implements IMovable
{
    protected $_name;
    protected $_life;
    protected $_agility;
    protected $_strengh;
    protected $_wit;

    const CLASSE = 'Character';

    public function __construct($name)
    {
        $this->_name = $name;
        $this->_life = 50;
        $this->_agility = 2;
        $this->_strengh = 2;
        $this->_wit = 2;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getLife()
    {
        return $this->_life;
    }

    public function getAgility()
    {
        return $this->_agility;
    }

    public function getStrengh()
    {
        return $this->_strengh;
    }

    public function getWit()
    {
        return $this->_wit;
    }

    public function getClasse()
    {
        return Character::CLASS;
    }

//Déplacements
//
    public function moveRight()
    {
        echo $this->_name . ": moves right.\n";
    }

    public function moveLeft()
    {
        echo $this->_name . ": moves left.\n";
    }

    public function moveDown()
    {
        echo $this->_name . ": moves down.\n";
    }

    public function moveUp()
    {
        echo $this->_name . ": moves up.\n";
    }

//combat
//
    final public function unsheathe()
    {
        echo $this->_name . ": unsheathes his weapon.\n";
    }
}

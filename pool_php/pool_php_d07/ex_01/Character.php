<?php

class Character
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

    public function getName()       {return $this->_name    ;}
    public function getLife()       {return $this->_life    ;}
    public function getAgility()    {return $this->_agility ;}
    public function getStrengh()    {return $this->_strengh ;}
    public function getWit()        {return $this->_wit     ;}
    public function getClasse()     {return Character::CLASS;}
}
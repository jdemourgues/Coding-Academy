<?php

abstract class ASpaceMarine implements IUnit
{
    protected $_name;
    protected $_hp; //Health points
    protected $_ap; //Action Points

    public function __construct($name, $hp = 0, $ap = 0)
    {
        $this->_name = $name;
        $this->_hp = $hp;
        $this->ap = $ap;
    }

    public function getName()   {return $this->_name    ;}
    public function getHp()     {return $this->_hp      ;}
    public function getAp()     {return $this->_ap      ;}


    public function equip($param){

    }

    public function attack($param){

    }

    public function receiveDamage($param){

    }

    public function moveCloseTo($param){

    }

    public function recoverAP(){

    }

}
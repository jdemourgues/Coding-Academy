<?php

abstract class AMonster implements IUnit
{
    protected $_name;
    protected $_hp; //Health points
    protected $_ap; //Action Points
    protected $_damage;
    protected $_apcost;
    protected $_melee;
    protected $_isAlive;
    protected $_isClose;

    public function __construct($name, $hp = 0, $ap = 0, $damage = 0, $apcost = 0)
    {
        $this->_name = $name;
        $this->_hp = $hp;
        $this->_ap = $ap;
        $this->_damage = $damage;
        $this->_apcost = $apcost;
        $this->_melee = true;
        $this->_isAlive = true;
        $this->_isClose = null;
    }

    public function getName()   {return $this->_name    ;}
    public function getHp()     {return $this->_hp      ;}
    public function getAp()     {return $this->_ap      ;}
    public function getDamage() {return $this->_damage  ;}
    public function getApcost() {return $this->_apcost  ;}
    public function isMelee()   {return $this->_melee   ;}
    public function isAlive()   {return $this->_isAlive ;}

    public function equip($param)
    {
        echo "Monsters are proud and fight with their bodies.\n";
    }

    public function attack($target)
    {
        if ($this->_isAlive == false)
        {
            return false;
        }
        try
        {
            if (!$target instanceof IUnit)
            {
                throw new Exception ("Error in AMonster. Parameter is not an IUnit.\n");
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

        if ($this->_isClose != $target)
        {
            echo $this->_name." I'm too far away from ".$target->getName()."\n";
        }
        else
        {
            if ($this->_ap >= $this->_apcost)
                {
                    $this->ap = $this->_ap - $this->_apcost;
                    $target->receiveDamage($this->_damage);
                    echo $this->_name."attacks ".$target->getName()."\n";
                }
        }
    }

    public function receiveDamage($damage)
    {
        if ($this->_isAlive == false)
        {
            return false;
        }
        $this->_hp = $this->_hp - $damage;
        if ($this->_hp <= 0)
        {
            $this->_isAlive = false;
        }
    }

    public function moveCloseTo($target)
    {
        if ($this->_isAlive == false)
        {
            return false;
        }
        try
        {
            if (!$target instanceof IUnit)
            {
                throw new Exception ("Error in AMonster. Parameter is not an IUnit.\n");
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
        if ($this->_isClose != $target)
        {
            echo $this->_name." is moving closer to ".$target->getName()."\n";
            $this->_isClose = $target;
        }
    }

    public function recoverAP(){

            if ($this->_isAlive == false)
            {
                return false;
            }
            if ($this->_ap + 7 > 50){
                $this->_ap = 50;
            else
                $this->_ap +=7;
            }

    }
}
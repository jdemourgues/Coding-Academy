<?php

abstract class ASpaceMarine implements IUnit
{
    protected $_name;
    protected $_hp; //Health points
    protected $_ap; //Action Points
    protected $_weapon;
    protected $_isClose;
    protected $_isAlive;

    public function __construct($name, $hp = 0, $ap = 0)
    {
        $this->_name = $name;
        $this->_hp = $hp;
        $this->ap = $ap;
        $this->_weapon = null;
        $this->_isClose = null;
        $this->_isAlive = true;

    }

    public function getName()   {return $this->_name    ;}
    public function getHp()     {return $this->_hp      ;}
    public function getAp()     {return $this->_ap      ;}
    public function getWeapon() {return $this->_weapon  ;}


    public function equip($weapon)
    {
        try
        {
            if (!$weapon instanceof AWeapon)
            {
                throw new Exception ("Error in ASpaceMarine. Parameter is not an AWeapon.\n");
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
        if ($weapon->getOwner() == null)
        {
            $weapon->setOwner($this);
            $this->_weapon = $weapon;
            echo $this->_name . " has been equipped with a " . $weapon->getName() . "\n";
        }
    }

    public function attack($target)
    {
        try
        {
            if (!$t  protected $_damage;
    protected $_apcost;
    protected $_melee;
    protected $_isAlive;arget instanceof IUnit)
            {
                throw new Exception ("Error in ASpaceMarine. Parameter is not a IUnit.\n");
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
        if ($this->_weapon == null)
        {
            echo $this->_name.": Hey, this is crazy. I'm not going to fight this empty handed.\n";
        }
        elseif (($weapon->isMelee() == true) and ($this->>isClose == null))
        {
            echo ": I'm too far away from ".$target."\n";
        }
        else
        {
            if (($this->_ap >= $weapon->_apcost) and ($weapon->isMelee() == false) || ($weapon->isMelee == true) and ($this->_isClose == $target))
            {
                $this->ap = $this->_ap - $weapon->_apcost;
                $target->receiveDamage($weapon->_damage);
                echo $this->_name."attacks ".$target->getName()." with ".$weapon->getName().".\n";
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
        if ($this->_ap + 9 > 50){
            $this->_ap = 50;
        else
            $this->_ap +=9;
        }
    }
}
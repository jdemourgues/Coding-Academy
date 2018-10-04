<?php
abstract class AWeapon
{
    protected $_name;
    protected $_apcost;
    protected $_damage;
    protected $_melee;
    protected $_owner;

    public function __construct($name, $apcost, $damage)
    {
        try {
        if (!is_string($name) || !is_int($apcost) || !is_int($damage))
            {
                throw new Exception ("Test Exception : Error in AWeapon constructor. Bad parameters.\n");
            }
            $this->_melee = false;
            $this->_name = $name;
            $this->_damage = $damage;
            $this->_apcost = $apcost;
            $this->_owner = null;
            $this->_melee = false;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function getName()    {return $this->_name   ;}
    public function getApcost()  {return $this->_apcost ;}
    public function getDamage()  {return $this->_damage ;}
    public function isMelee()    {return $this->_melee  ;}
    public function getOwner()   {return $this->_owner  ;}


    public function setOwner($owner)    {$this->_owner = $owner ;}


    abstract public function Attack();
}_
?>
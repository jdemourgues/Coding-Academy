<?php
$i = 1;
class Character
{
    private $_name;
    private $_strength;
    private $_magic;
    private $_intelligence;
    private $_life;


    public function __construct($name = null, $strength = 0, $magic = 0, $intelligence = 0, $life = 100)
    {
        $this->_strength = 0;
        $this->_magic = 0;
        $this->_intelligence = 0;
        $this->_life = 100;
        if ($name == null)
        {
            $this->_name = "Character ".$GLOBALS['i'];
            $GLOBALS['i']++;
        }
        else
            $this->_name = $name;
    }

    public function __toString()
    {
        return "My name is ".$this->_name.".\n";
    }
}


<?php
class Pony
{
    private $_gender;
    private $_name;
    private $_color;

    public function __construct($gender, $name, $color)
    {
        $this->_gender = $gender;
        $this->_name = $name;
        $this->_color = $color;
    }

    public function __destruct()
    {
        echo "I'm a dead pony.\n";
    }

    public function __toString()
    {
        return "Don't worry, I'm a pony!\n";
    }
}
//test
//
//$toto = new Pony('M', "Tarzan", 'grey');
//echo $toto;
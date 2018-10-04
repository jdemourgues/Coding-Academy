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

    public function speak()
    {
        echo "Hiii hiii hiii\n";
    }

    public function __call($nom, $arguments)
    {
        if (!method_exists($this, $nom))
        {
            echo "I don't know what to do...\n";
        }
    }

    public function __get($name)
    {
        echo "It's not righht to get a private attribute!\n";
        if (property_exists($this, $name))
        {
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        echo "It's not right to set a private attribute !\n";
        if (property_exists($this, $name))
        {
            $this->$name = $value;
        }
    }
}
//test
//
$toto = new Pony('M', "Tarzan", 'grey');
echo $toto;
echo $toto->_name;
echo $toto->_taille;
$toto->_gender = 'F';
$toto->_height = 125;
<?php
include_once("Character.php");

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name, 100, 10, 8, 3, 'Warrior');
        echo $name.": I'll engrave my name in history\n";
    }

    public function __destruct()
    {
        echo $this->_name.": Aarrg I can't believe I'm dead...\n";
    }

    public function attack()
    {
        echo $this->_name.": I'll crush you with my hammer!\n";

    }
}
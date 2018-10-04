<?php
class Animal
{
    protected $_name;
    protected $_legs;
    protected $_type;

    private static $_numberOfAnimalsAlive = 0;
    private static $_numberOfMammals = 0;
    private static $_numberOfFishes = 0;
    private static $_numberOfBirds = 0;

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    public function __construct($name, $legs, $type)
    {
        $this->_name = $name;
        $this->_legs = $legs;
        switch ($type)
        {
            case Animal::MAMMAL:
                $this->_type = 'mammal';
                self::$_numberOfMammals++;
            break;
            case Animal::FISH:
                $this->_type = 'fish';
                self::$_numberOfFishes++;
            break;
            case Animal::BIRD:
                $this->_type = 'bird';
                self::$_numberOfBirds++;
            break;
            default:
                break;
        }
             echo "My name is " . $this-> _name . " and I am a " . $this->_type . " !\n";
        self::$_numberOfAnimalsAlive++;
    }

    public function __destruct()
    {
        self::$_numberOfAnimalsAlive--;
        switch ($this->_type)
        {
            case 'mammal':
                self::$_numberOfMammals--;
                break;
            case 'fish':
                self::$_numberOfFishes--;
                break;
            case 'bird':
                self::$_numberOfBirds--;
                break;
            default:
                break;
        }
    }


    public function getName()
    {
        return $this->_name;
    }

    public function getLegs()
    {
        return $this->_legs;
    }

    public function getType()
    {
        return $this->_type;
    }

    public static function getNumberOfAnimalsAlive()
    {
        if (self::$_numberOfAnimalsAlive<=1)
            echo "There is currently ".self::$_numberOfAnimalsAlive." animal alive in our world.\n";
        else
            echo "There are currently ".self::$_numberOfAnimalsAlive." animals alive in our world.\n";
        return self::$_numberOfAnimalsAlive;
    }

    public static function getNumberOfMammals()
    {
        if (self::$_numberOfMammals <= 1)
            echo "There is currently ".self::$_numberOfMammals." mammal alive in our world.\n";
        else
            echo "There are currently ".self::$_numberOfMammals." mammals alive in our world.\n";
        return self::$_numberOfMammals;
    }

    public static function getNumberOfFishes()
    {
        if (self::$_numberOfFishes <= 1)
            echo "There is currently ".self::$_numberOfFishes." fish alive in our world.\n";
        else
            echo "There are currently ".self::$_numberOfFishes." fishes alive in our world.\n";
        return self::$_numberOfFishes;
    }

    public static function getNumberOfBirds()
    {
        if (self::$_numberOfBirds <= 1)
            echo "There is currently ".self::$_numberOfBirds." bird alive in our world.\n";
        else
            echo "There are currently ".self::$_numberOfBirds." birds alive in our world.\n";
        return self::$_numberOfBirds;
    }
}
?>
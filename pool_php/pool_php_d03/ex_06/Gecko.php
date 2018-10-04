<?php
class Gecko
{
    private $_name;
    private $_age;

    public function __construct($new_name = "", $age = 0, $energy = 100)
    {
        $this->_name = $new_name;
        if ($new_name != "")
        {
            echo "Hello ".$this->_name."!\n";
        }
        else
            echo "Hello !\n";
        $this->_age = $age;
        $this->_energy = $energy;
    }

    public function __destruct()
    {
        if ($this->_name != "")
        echo "Bye ".$this->_name."!\n";
        else
        echo "Bye !\n"; 
    }
    public function getName ()
    {
        return $this->_name;
    }

    public function getAge()
    { 
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age=$age;
    } 

    public function status()
    {
        switch($this->_age)
        {
            case 0 :
                echo "Unborn Gecko\n";
                break; 
            case 1 :
                echo "Baby Gecko\n";
                break;
            case 2 :
                echo "Baby Gecko\n";
                break;
            case ($this->_age >= 3 && $this->_age <= 10):
                echo "Adult Gecko\n";
                break;
            case ($this->_age >= 11 && $this->_age <= 13):
                echo "Old Gecko\n";
                break;
            default:
                echo "Impossible Gecko\n";
                break;
        }
    }

    public function hello($string)
        {
        if (is_numeric($string))
        {
            while($string>0)
            {
                if($this->_name == "")
                    echo "Hello !\n";
                else
                echo "Hello, I'm ".$this->_name."!\n";
            $string = $string - 1;
            } 
        }
        else
                if ($this->_name == "")
                    echo "Hello !\n";
                else
                    echo "Hello ".$string.", I'm ".$this->_name."!\n";
        }

    public function getEnergy()
    {
        return $this->_energy;
    }

    public function setEnergy($energy)
    {
        $this->_energy = $energy;
        if ($this->_energy > 100)
            $this->_energy = 100;
        elseif ($this->_energy < 0)
            $this->_energy = 0;
    }

    public function eat($string = "")
    {
        if (strcasecmp($string,"Meat") == 0)
        {
            $this->setEnergy($this->_energy + 10);
            echo "Yummy!\n";
        }
        elseif (strcasecmp($string, "Vegetable") == 0)
        {
            $this->setEnergy($this->_energy - 10);
            echo "Erk!\n";
        }
        else
            echo "I can't eat this.\n";
    }
}
?>
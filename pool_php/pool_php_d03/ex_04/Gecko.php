<?php
class Gecko
{
    private $_name;
    private $_age;

    public function __construct($new_name = "", $age = 0)
    {
        $this->_name = $new_name;
    	if ($new_name != "")
    	{
    		echo "Hello ".$this->_name." !\n";
    	}
    	else
    		echo "Hello !\n";
        $this->_age = $age;
    }

    public function __destruct()
    {
        if ($this->_name != "")
        echo "Bye ".$this->_name." !\n";
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
}
?>
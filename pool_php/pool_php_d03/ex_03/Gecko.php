<?php
class Gecko
{
    private $name;

    public function getName ()
    {
        return $this->name;
    }

    public function __construct($new_name = "")
    {
        $this->name = $new_name;
    	if ($new_name != "")
    	{
    		echo "Hello ".$this->name." !\n";
    	}
    	else
    		echo "Hello !\n";
    }

    public function __destruct()
    {
        if ($this->name != "")
        echo "Bye ".$this->name." !\n";
        else
        echo "Bye !\n"; 
    }
}
?>
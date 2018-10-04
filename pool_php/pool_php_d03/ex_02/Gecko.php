<?php
class Gecko
{
    public $name;

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
}


?>
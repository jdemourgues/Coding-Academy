<?php
class Astronaut
{
	private static $_pid = 0;
	private $_name;
	private $_snacks;
	private $_destination;
	private $_id;

	public function __construct($new_name = "")
		{
		$this->_name = $new_name;
	   	echo $this->_name." ready for launch !\n";
    	$this->_id = self::$_pid;
		self::$_pid++;
		$this->_destination = NULL;
		}

	public function getId()
		{
		return($this->_id);
		}

	public function getDestination()
	{
		return($this->_destination);
	}	
}		
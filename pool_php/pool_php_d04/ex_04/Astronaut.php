<?php
class Astronaut
{
	private static $_pid = 0;
	private $_name;
	private $_snacks = 0;
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

	public function __destruct()
	{
		if ($this->_destination == NULL)
		{
			echo $this->_name.": I may have done nothing, but I have ".$this->_snacks." Mars to eat at least !\n";
		}	
		else
			echo $this->_name.": Mission aborted !\n";
	}	

	public function getId()
		{
		return($this->_id);
		}

	public function getDestination()
	{
		return($this->_destination);
	}	

	public function getSnacks()
	{
		return($this->_snacks);
	}

	public function doActions($action = "")
	{
		if ($action == "")
		{
			echo $this->_name.": Nothing to do.\n";
		}
		elseif ($action instanceof planet\Mars)
		{
			echo $this->_name.": started a mission !\n";
			$this->_destination = $action;
		}
		elseif ($action instanceof chocolate\Mars)
		{
			echo $this->_name." is eating mars number ".$action->getId().".\n";
			$this->_snacks++;

		}
	}	
}		
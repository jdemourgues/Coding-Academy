<?php
class Mars
{
	private static $_id = 0;
	private $_pid;

	public function __construct()
	{
	$this->_pid = self::$_id;
	self::$_id++;
	}

public function getId()
	{
	return($this->_pid);
	}
}
?>
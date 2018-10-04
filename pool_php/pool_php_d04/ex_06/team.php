<?php
class Team
{
	private $_name;
	private $_astronauts;
	private $_equipe;

	public function __construct($new_name)
	{
		$this->_name = $new_name;
		$this->_equipe = array();
	}

	public function add ($astronauts)
	{
		if (!$astronauts instanceof Astronaut)
		{
			echo "Sorry, you are not part of the team.\n";
		}
		else
			array_push($this->_equipe, $astronauts);
	}

	public function remove($astronauts)
	{

	}

	public function countMembers()
	{

	}

	public function showMembers()
}
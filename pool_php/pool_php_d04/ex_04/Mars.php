<?php
	namespace chocolate;
	{
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
	}
	
	namespace planet;
	{
		class Mars
		{	
			private $_size;

			public function __construct($new_size = 0)
			{
				$this->_size = $new_size;
			} 

			public function getSize()
			{
				return($this->_size);
			}

			public function setSize($_size)
			{
				$this->_size = $_size;
			}
		}	

	}
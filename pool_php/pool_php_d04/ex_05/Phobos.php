<?php
namespace planet\moon;
{
	class Phobos
	{
		private $_mars;

		public function __construct($new_mars = "")
		{
			if ($new_mars instanceof \planet\Mars)
			{
				echo "Phobes placed in orbit.\n";
			}
			else 
				echo "No planet given.\n";
		}

		public function getMars()
		{
			return $this->_mars;
		}
	}
}
<?php
function get_angry_dog($nbr)
{
	$str = '';

	for ($cpt = 1; $cpt <= $nbr; $cpt++)
	{
		$str = $str.'woof';
	}
	return ($str.PHP_EOL);
}
?>
<?php
function my_get_args(...$array)
{
	$tab = array();
	foreach ($array as $n)
	{
		array_push($tab, $n);
	}
	return ($tab);
}
?>
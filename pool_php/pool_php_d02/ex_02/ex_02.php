<?php
/*function my_create_map(...$array)
{ 
	$arg = func_get_args();
	for ($i = 0; $i < func_num_args(); $i++)
	{	
		if (count($arg[$i]) < 2 )
		{
			echo 'Il faut au moins 2 arguments dans l\'argument numero ';
			print ($i + 1);
			echo PHP_EOL;
			return ;
		}
	}
	$ret = array();
	for(($i = 0); ($i < func_num_args()); $i++)
	{
		$ret[$arg[$i][0]] = $arg[$i][1];
	}
	return ($ret);
}
*/
function my_create_map(...$array)
{
	$ret = array();
	foreach ($array as $value)
	{
		if (count($value) < 2)
			{
				echo 'Il faut au moins 2 arguments dans l\'argument numero ';
				echo PHP_EOL;
				return NULL;
			}
		$ret[$value[0]] = $value[1];
	}
	return ($ret);
}				
?>
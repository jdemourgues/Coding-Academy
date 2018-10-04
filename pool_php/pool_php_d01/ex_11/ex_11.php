<?php
function my_print_args($argv)
{
	foreach ($argv as $n)
	{
		if ($n != $argv[0])
			{
				echo $n .PHP_EOL;
			}
	}
}
//my_print_args($argv);
?>
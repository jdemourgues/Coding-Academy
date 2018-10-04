<?php
function my_swap(&$stra, &$strb)
{
	$temp = $strb;
	$strb = $stra;
	$stra = $temp;
}
?>
<?php

function my_add_elem_map($key, $value, &$map){
	if (!array_key_exists($key, $map)){
		$map[$key] = $value;
	}
	else
		echo 'You have to give good parameters.'.PHP_EOL;		
	return($map);
}

function my_modify_elem_map($key, $value, &$map){
	if (array_key_exists($key, $map)){
		$map[$key] = $value;
	}
	else
		echo 'You have to give good parameters.'.PHP_EOL;
	return($map);
}
function my_delete_elem_map($key, &$map){
	if (array_key_exists($key, $map)){
		unset($map[$key]);
	}
	else
		echo 'You have to give good parameters.'.PHP_EOL;		
	return($map);
}
function my_is_elem_valid($key, $value, $map){
	if (array_key_exists($key, $map)){
			if($map[$key] == $value){
	    		return(true);
			}
			return(false);
	    }
	else 
		echo 'You have to give good parameters.'.PHP_EOL;

}
?>
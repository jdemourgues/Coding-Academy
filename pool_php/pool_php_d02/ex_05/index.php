<?php
require ("ex_05.php");
$my_map = array();

my_add_elem_map('21', 'Jerome', $my_map);
my_add_elem_map('19', 'Florence', $my_map);
my_add_elem_map('12', 'Sixtine', $my_map);
my_add_elem_map('21', 'Marjolaine', $my_map);
my_add_elem_map('06', 'Pierre-Louis', $my_map);

print_r($my_map);

my_delete_elem_map('21', $my_map);
my_delete_elem_map('19', $my_map);
my_delete_elem_map('12', $my_map);
my_delete_elem_map('06', $my_map);

print_r($my_map);

my_add_elem_map('21', 'Jerome', $my_map);
my_add_elem_map('19', 'Florence', $my_map);
my_add_elem_map('12', 'Sixtine', $my_map);
my_add_elem_map('06', 'Pierre-Louis', $my_map);

print_r($my_map);

my_modify_elem_map('21', 'Marjolaine', $my_map);
my_modify_elem_map('23', 'Louis', $my_map);

my_is_elem_valid('19', 'Florence', $my_map);
my_is_elem_valid('17', 'Michelle', $my_map);

print_r($my_map);
?>
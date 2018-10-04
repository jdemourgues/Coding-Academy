<?php
require ("ex_05.php");

var_dump(my_password_hash('toto'));

my_password_verify ('toto', '59f88ac20eba9', '3182bb9795ec68f659d7d6121a3bf74d');
?>
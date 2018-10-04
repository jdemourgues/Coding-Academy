<?php
include_once ("database.php");
include_once ("users.php");
include_once ("products.php");

//$toto = new database('localhost', 'root', 'root@2017','3306', 'pool_php_rush');
/*$tata = new users(null, 'localhost');
$tata->createUser('lolo', 'lolo@gmail.com', 'lolo');
$tata->createUser('lili', 'lili@gmail.com', 'lili');
$tata->createUser('lulu', 'lulu@gmail.com', 'lulu');
$tata->createUser('lala', 'lala@gmail.com', 'lala');
$tata->createUser('titi', 'titi@gmail.com', 'titi');


echo "dodo : ".$tata->checkUserLevel('dodo@gmail.com', 'dodo')."\n";
echo "lolo : ".$tata->checkUserLevel('lolo@gmail.com', 'dodo')."\n";
echo "lala : ".$tata->checkUserLevel('lala@gmail.com', 'lala')."\n";
echo "lili : ".$tata->checkUserLevel('lili@gmail.com', 'lili')."\n";
*/
$papa = new Products();
var_dump($papa->getProduct('*','1'));



?>
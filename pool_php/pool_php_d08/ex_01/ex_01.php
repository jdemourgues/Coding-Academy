<?php

function my_very_secure_hash($password)
{
    $hash = md5($password);
    return $hash;
}
// test
//
echo my_very_secure_hash('toto')."\n";
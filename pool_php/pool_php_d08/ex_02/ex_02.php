<?php

function my_password_hash($password)
{
    $salt = uniqid();
    $hash = md5($password.$salt);
    $array = array('hash' => $hash, 'salt' => $salt);
    return $array;
}

function my_password_verify($password, $salt, $hash)
{
    if ($hash == md5($password.$salt))
    {
//			echo "true";
        return true;
    }
    else{
//	echo "false";
        return false;
    }
}
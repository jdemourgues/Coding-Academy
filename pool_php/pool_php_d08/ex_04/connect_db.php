<?php
$bdd = array();

const ERROR_LOG_FILE = 'errors.log';

function connect_db($host, $username, $password, $port, $db);
{
    try
    {
        $bdd = new PDO('mysql:host=$host;port=$port;db=$db', '$username', '$password');
        echo "Connection to DB successful\n";
    }
    catch (Exception $e)
    {
        echo "Error connection to DB\n";
        echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE >> ERROR_LOG_FILE;
    }
}

if ($argc == 6)
{
    connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
    else
        echo "Bad params! Usage: php connect_db.php host username password port db\n";
    }
?>
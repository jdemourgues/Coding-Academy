<?php

const ERROR_LOG_FILE = "~/error_log_file.txt";

function connect_db($host, $username, $password, $port, $db)
{
    try {
        $bdd = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $password);
    } catch (Exception $e) {
        echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
        $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
        shell_exec("echo ".$msg."");
    }
}
connect_db('localhost', 'root', 'root@2017', '3306', 'gecko');

?>
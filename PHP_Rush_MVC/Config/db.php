<?php
/**
 * Created by PhpStorm.
 * User: Margaux & jdm
 * Date: 29/11/17 Time: 14:56
 * Last Modified : 30/11/17 13:45
 */

class DB
{

    const ERROR_LOG_FILE = "/tmp/php_rush_MVC_error_log_file.txt";

    private $_host;
    private $_port;
    private $_username;
    private $_db;
    private $_password;
    private $_pdo;

    static private $_instance = NULL;

    private function __construct($host, $username, $password, $port, $db)
    {
        $this->_host = $host;
        $this->_username = $username;
        $this->_password = $password;
        $this->_port = $port;
        $this->_db = $db;

        try {
            $this->_pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $password);
        } catch (Exception $e) {
            echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE . "\n";
            $msg = "'" . gmdate('Y-m-d h:i:s \G\M\T', time()) . " : " . $e->getMessage() . "' >>" . ERROR_LOG_FILE;
            shell_exec("echo " . $msg . "");
        }
    }

    public function getHost()
    {
        return $this->_host;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    public function getPort()
    {
        return $this->_port;
    }

    public function setPort($port)
    {
        $this->_port = $port;
    }

    public function getName()
    {
        return $this->_username;
    }

    public function setName($username)
    {
        $this->_username = $username;
    }

    public function getDb()
    {
        return $this->_db;
    }

    public function setDb($db)
    {
        $this->_db = $db;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }


    public static function getInstance()
    {
        if (is_null(self::$_instance))
            self::$_instance = new DB('localhost', 'root', 'root@2017', '3306', 'rush_mvc_php');
        return self::$_instance;
    }

    public function setData($table, $fields, $values, $cond)
    {
        $result = $this->_pdo->query("UPDATE $table SET $fields = '$values' where $cond");
    }

    public function createData($table, $field, $value)
    {
        $result = $this->_pdo->query("INSERT INTO $table($field) VALUES ($value)");
    }

    public function getAllData($table)
    {
        //echo "SELECT $fields from $table WHERE $cond";
        $result1 = $this->_pdo->query("SELECT * from $table");
        if ($result1 != false) {
            return $result1->fetchAll();
        }
    }

    public function getData($table, $fields, $cond)
    {
        $result1 = $this->_pdo->query("SELECT $fields from $table WHERE $cond");
        if ($result1 != false) {
           // var_dump($result1->fetchAll());
            return $result1->fetchAll();
        }
    }

    public function checkData($table, $cond)
    {
        echo "SELECT * from $table WHERE $cond";
        $result1 = $this->_pdo->query("SELECT * from $table WHERE $cond");
        $res1 = $result1->fetch();
        if ($res1)
            return true;
        else
            return false;
    }

    public function deleteData($table, $cond)
    {
        $result1 = $this->_pdo->query("DELETE FROM $table WHERE $cond");
    }

    public function insert($insert_sql)
    {
        echo $insert_sql;
        $result = $this->_pdo->query($insert_sql);
    }
}


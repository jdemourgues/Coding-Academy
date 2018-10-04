<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 14/11/17
 * Time: 18:48
 */

class Database
{
    const ERROR_LOG_FILE = "php_rush_error_log_file.txt";

    private $_host;
    private $_port;
    private $_username;
    private $_db;
    private $_password;
    private $_conn;
    private $_id;

    public function __construct($host, $username, $password, $port, $db)
    {
        $this->_host = $host;
        $this->_username = $username;
        $this->_password = $password;
        $this->_port = $port;
        $this->_db = $db;

        try {
            $this->_conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $password);
        } catch (Exception $e) {
            echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }
    public function getHost()           {return $this->_host;                   }
    public function setHost($host)              {$this->_host = $host;          }
    public function getPort()           {return $this->_port;                   }
    public function setPort($port)              {$this->_port = $port;          }
    public function getName()           {return $this->_username;               }
    public function setName($username)          {$this->_username = $username;  }
    public function getDb()             {return $this->_db;                     }
    public function setDb($db)                  {$this->_db = $db;              }
    public function getPassword()       {return $this->_password;               }
    public function setPassword($password)      {$this->_password = $password;  }

    public function verifyUserExist($email)
    {
        $result1=$this->_conn->query("SELECT * from users WHERE email='$email'");
        $res1 = $result1->fetch();
        if ($res1) {
            return true;
        }
        else {
            return false;
        }
   }
//    public function createUser($username, $email, $password){
//
//    }
//        $result = $this->_conn->query("INSERT INTO users(username, email, password) VALUES ('".$username."','".$email."','".$password."')");
//    }

    public function setData($table, $fields, $values,$cond){
        $result = $this->_conn->query("UPDATE $table SET $fields = '$values' where $cond");
    }

    public function createData($table, $field, $value){
        $result = $this->_conn->query("INSERT INTO $table($field) VALUES ($value)");
    }
    public function getData($table, $fields, $cond){
        //echo "SELECT $fields from $table WHERE $cond";
        $result1=$this->_conn->query("SELECT $fields from $table WHERE $cond");
        if ($result1 != false)
        {
            return $result1->fetchAll();
        }
    }

    public function checkData($table, $cond){
        echo "SELECT * from $table WHERE $cond";
        $result1 = $this->_conn->query("SELECT * from $table WHERE $cond");
//        var_dump($result1);
        $res1 = $result1->fetch();
        var_dump($res1);
        if ($res1)
            return true;
        else
            return false;
    }

    public function deleteData($table, $cond){
        $result1=$this->_conn->query("DELETE FROM $table WHERE $cond");
    }
}
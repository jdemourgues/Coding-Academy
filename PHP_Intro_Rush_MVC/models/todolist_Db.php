<?php
/**
 * Created by PhpStorm.
 * User: MArgaux et Jerome
 * Created Date: 28/11/17 Time: 10:32
 * Modified Date :
 */


class TodoDb
{
    const ERROR_LOG_FILE = "/tmp/php_rush_MVC_intro_error_log_file.txt";

    private $_host;
    private $_port;
    private $_username;
    private $_db;
    private $_password;
    private $_pdo;
    private $_taskAdded;
    private $_taskModified;
    private $_taskDeleted;
    static private $_instance = NULL;

    private function __construct($host, $username, $password, $port, $db)
    {
        $this->_host = $host;
        $this->_username = $username;
        $this->_password = $password;
        $this->_port = $port;
        $this->_db = $db;
        $this->_taskAdded = false;
        $this->_taskModified = false;
        $this->_taskDeleted = false;

        try {
            $this->_pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $password);
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
    public function getTaskAdded()      {return $this->_taskAdded;              }
    public function getTaskModified()   {return $this->_taskModified;           }
    public function getTaskDeleted()    {return $this->_taskDeleted;           }

    public static function get_Instance() {
        if(is_null(self::$_instance))
            self::$_instance = new todoDb('localhost', 'root','root@2017', '3306', 'todo_php');
        return self::$_instance;
    }

    public function get_tasks() {
        try {
            $result=$this->_pdo->query("SELECT * from tasks");
            $res = $result->fetchAll();
            return $res;
        } catch (Exception $e) {
            echo 'Error mysql in function getTasks : ' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }

    public function get_task($id) {
        try {
            $result=$this->_pdo->query("SELECT * from tasks where id = '$id'");
            $res = $result->fetchAll();
            return $res;
        } catch (Exception $e) {
            echo 'Error mysql in function getTaskID : ' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }

    public function post_task($title, $description = null){
        $this->_taskAdded = false;
        try {
            $date = date("Y/m/d");
            $req = "INSERT INTO tasks (title, description, edition_date) VALUES ('$title','$description','$date'";
            var_dump($this->_pdo->query($req));
            $this->_taskAdded = true;

        } catch (Exception $e) {
            echo 'Error mysql in function post_task : ' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }

    public function put_task($id, $title = null, $description = null) {
        $this->_taskModified = false;
        try {
            $this->_pdo->query("UPDATE tasks SET title = '$title', description = '$description' WHERE id LIKE '$id'");
            $this->_taskModified = true;
        } catch (Exception $e) {
            echo 'Error mysql in function put_Task : ' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }

    public function delete_task($id) {
        $this->_taskDeleted = false;
        try {
            $this->_pdo->query("DELETE FROM tasks WHERE id LIKE '$id'");
            $this->_taskDeleted = true;
        } catch (Exception $e) {
            echo 'Error mysql in function delete_Task : ' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE. "\n";
            $msg = "'".gmdate('Y-m-d h:i:s \G\M\T', time())." : ".$e->getMessage()."' >>". ERROR_LOG_FILE;
            shell_exec("echo ".$msg."");
        }
    }


}
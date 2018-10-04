<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 14/11/17
 * Time: 18:31
 */
include_once ("database.php");

class Users
{
    protected $_id;
    protected $_username;
    protected $_email;
    protected $_admin;
    protected $_bdd1;

    const TABLE = 'users';

        public function __construct($bdd1 = null, $ip = 'localhost')
    {
        if ($bdd1 == null)
            $this->_bdd1 = new Database($ip, 'root', 'root@2017','3306','pool_php_rush');
        else $this->bdd1 = $bdd1;
    }

    public function createUser($username, $email, $password)
    {
        if ($this->_bdd1->checkData(users::TABLE,"email = '$email'") != true) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $this->_bdd1->createData('users',"username, email, password", "'$username', '$email', '$pass'");
            return 1;
        }
        else return 2;
    }

    public function getUsers($fields, $cond){
        return $this->_bdd1->getData(users::TABLE, $fields, $cond);
    }
    public function ModifyUser($email, $fields, $values){
    $this->_bdd1->setData(users::TABLE, $fields, $values,"email = '$email'");
    }

    public function deleteUser($email){
    $this->_bdd1->deleteData(users::TABLE, "email = '$email'");
    }

    public function checkUserLevel($email, $password)
    {
        $pass_hash=$this->getUsers('password', "email = " . "'" . $email . "'");
        if ($pass_hash && password_verify($password, $pass_hash[0]['password']) == true) {
            if ($this->getUsers('admin', "email = " . "'" . $email . "'")[0]['admin'] == true)
                return (2);
            else
                return (1);
        }
        else
            return (0);

    }
}
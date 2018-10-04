<?php
/**
 * Created with PhpStorm.
 * By: Margaux & jdm
 * Date: 29/11/17 Time: 14:56
 * Last modified: 30/11/2017 14:30
 */

class Session{
private $_email;
private $_username;
private $_group;
private $_status;

    public function __construct($email='', $username="", $group='', $status='actif'){
    $this->_email = $email;
    $this->_username = $username;
    $this->_group = $group;
    $this->_status = $status;

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->_group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->_group = $group;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }

}
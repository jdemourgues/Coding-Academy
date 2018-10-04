<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 30/11/17
 * Time: 17:14
 */

class ErrorsController
{
    static private $_instance = NULL;
    protected $request;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance))
            self::$_instance = new ErrorsController();
        return self::$_instance;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function view() {
        echo "Dommage le controlleur n'existe pas";
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: Margaux & jdm
 * Created Date: 29/11/17 Time: 14:56
 * Last Updated: 30/11/17 11:45
 */

// Le core.php va initialiser tous les Controllers, Database, Dispatcher, routes...

spl_autoload_register(function ($class) {
    $source = "../Controllers/" . $class . ".php";
    if (file_exists($source)) {
        require_once $source;
    }
});
require_once '../dispatcher.php';
require_once '../Src/router.php';
require_once 'db.php';
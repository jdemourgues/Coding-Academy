<?php
/**
 * Created with PhpStorm.
 * by Margaux & jdm
 * Date: 30/11/17 Time: 17:41
 * Last update : 30/11/17 17:45
 */

include_once '../Models/Articles.php';

class ViewsController
{
    static private $_instance = NULL;
    protected $request;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance))
            self::$_instance = new ViewsController();
        return self::$_instance;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function displayRegister()
    {
        include_once '../Views/Users/register.php';
    }

    public function displayHome()
    {        include_once '../Views/visitor_home.php';
 /*       $group = $_SESSION['group'];
        $status = $_SESSION['status'];
        if ($group = 'visitors' && $status = 'actif')
            include_once '../Views/visitor_home.php';
        if ($group = 'users' && $status = 'actif')
            include_once '../Views/user_home.php';
        if ($group = 'writers' && $status = 'actif')
            include_once '../Views/writer_home.php';
        if ($group = 'admin' && $status = 'actif')
            include_once '../Views/admin_home.php';
*/
    }

    public function displayArticles()
    {
        $modelArticles = new Articles ();
//        print_r($modelArticles->getArticles());
        foreach ($modelArticles->getArticles() as $value) {
            echo "<div><p>" . $value['article_Title'] . " - Edited by : " . $value["article_AuthorUsername"] . " - on : " . $value['article_CreationDate'] . " - modified on : " . $value['article_ModificationDate'] . " - Category : " . $value['article_CategoryName'] . "</p><p>" . $value['article_Description'] . "</p></div>";
        }
    }

// Fonction de test
    public function displayusershome() {
        include_once '../Views/user_home.php';
    }
    public function displaywritershome() {
        include_once '../Views/writer_home.php';
    }
    public function displayadminhome() {
        include_once '../Views/admin_home.php';
    }
}
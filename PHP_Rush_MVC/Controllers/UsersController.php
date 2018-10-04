<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 29/11/17
 * Time: 14:44
 */

class UsersController extends AppController
{
    static private $_instance = NULL;
    protected $request;
    private $model;

    private function __construct(){
        $this->model = $this->loadModel('Users');
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance))
            self::$_instance = new UsersController();
        return self::$_instance;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }
        // fonction appelé via la route 'users/controlregister' voir routes.php
        public function controlregister($username, $email, $password, $passwordconf){
            $return = $this->model->errorManagement($username, $email, $password, $passwordconf);

            if ( $return != '' ) {
                // code non fonctionnel, pour vous indiquer quoi faire
                header('Location: [Insérer page d accueil avec tous les articles par exemple]');
            }
            else {
                // création de l'utilisateur en base de données
                $count = $this->model->registration($username, $email, $password);
                if ($count > 0) {
                    unset($_POST);
                    // code non fonctionnel, pour vous indiquer quoi faire
                    header('views/displayregister');
                }
            }
        }
    // fonction appelé via la route 'users/controllogin'
        public function controllogin($email, $password) {
            $return = $this->model->errorlogin($email, $password);
            if ($return != '') {
                echo $return;
                include_once '../Views/visitor_home.php';
            }
            else {
                header("Location: /PHP_Rush_MVC/views/displayusershome");
                // new session ($email, $u...)
                //requete pour connaitre le groupe et le statut de la personne
                //selon le groupe et le statut affiche telle ou telle home
            }

        }

    public function modifyUser() {}
    public function deleteUser() {}
    public function displayUser() {}

}
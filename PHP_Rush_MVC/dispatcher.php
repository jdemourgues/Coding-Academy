<?php
/**
 * Created by PhpStorm.
 * User: Margaux & jdm
 * Date: 29/11/17 Time: 14:57
 * Last updated: 30/11/2017 11:45
 */

require_once 'Src/request.php';

class Dispatcher{

    function __construct(){

        // instancie un nouveau "Request" et récupère l'url et les posts s'il y en a
        $this->request = new Request();

        // récupère les infos dont on a besoin est les set dans request
        Router::parse($this->request->url, $this->request);

        // 'users'.'Controller' -> 'UsersController'
        $controllerName  = ucfirst($this->request->controller).'Controller';

        // set le path du fichier -> '../Controllers/UsersController.php'
        $controllerFile = '../Controllers/'. $controllerName .'.php';

        // si le controlleur n'existe pas, redirige vers une page d'erreur
        if(!file_exists($controllerFile)) {
            $controllerName = "ErrorsController";
            $action         = "view";
        }
        else { // Sinon récupère l'action à executer (set précédemmment dans Router::parser(...))
            $action         = $this->request->action;
        }
        // récupère l'instance du controller voulu 'UsersController', instancier dans le core.php fonction spl_autoload_register
        $controller = $controllerName::getInstance();
        // Set la request du controlleur voulu 'UserController' (via AppController qu'il extends)
        $controller->setRequest($this->request);

        // Appelle la fonction $action contenue dans la classe $controller (ici: controlregister dans la classe UsersController)
        // avec les paramètres contenus dans $this->request->params set précédemment dans Router::parse donc ici le résultat d'un post
        call_user_func_array(array($controller,$action), $this->request->params);
    }
}
?>

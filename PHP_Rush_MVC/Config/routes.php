<?php
/**
 * Created by PhpStorm.
 * User: Maragux et jdm
 * Date: 29/11/17 Time: 20:52
 * Last updated: 30/11/17 11:45
 */
// création d'une route valide utilisée via l'uri 'users/controlregister'
// (controller: users, fonction à appeler : controlregister)
Router::addRoute('PHP_Rush_MVC', 'views/displayHome');
Router::addRoute('PHP_Rush_MVC/users/controlregister', 'users/controlregister');
Router::addRoute('PHP_Rush_MVC/views/displayregister', 'views/displayregister');
Router::addRoute('PHP_Rush_MVC/users/controllogin', 'users/controllogin');

//Routes de test
Router::addRoute('PHP_Rush_MVC/views/displayusershome', 'views/displayusershome');
Router::addRoute('PHP_Rush_MVC/views/displaywritershome', 'views/displaywritershome');
Router::addRoute('PHP_Rush_MVC/views/displayadminhome', 'views/displayadminhome');




// exemples de construction de routes
//Router::addRoute('', 'articles/viewall');
//Router::addRoute('user/login', 'users/login');
//Router::addRoute('user/register', 'users/register');
// Router::addRoute('user/logout', 'users/logout');
<?php
    include_once('../twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('templates'); // Dossiercontenant les templates
    $twig = new Twig_Environment($loader, array(
    'cache' => false
    ));


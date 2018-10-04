<?php

require_once 'session.php';

    class Request{

        public  $url;
        public  $posts;
        private $session;

        function __construct(){
            $this->url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
            // recupère les posts s'il y en a
            if (!empty($_POST)){
                $this->posts = $_POST;
            }
            $this->session = new Session();
        }

        public function getSession() {
            return $this->session;
        }
    }

?>

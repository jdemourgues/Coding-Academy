<?php
	// controller de base que tous les controller vont extends, donc ils vont tous partagés uun "tronc commun" de fonctions
	Abstract class AppController {

		protected static $instance = null;
		protected $request;

		public static function getInstance(){

			if (is_null(self::$instance)) {
				$className = get_called_class();
				self::$instance = new $className();
			}
			return self::$instance;
		}

		public function setRequest($request){
			$this->request = $request;
		}


		// charge le modèle ici de 'User' quand appelé dans le constructeur de UsersController
		public function loadModel($model){
			require_once '../Models/' . $model .'.php';
			$model = new $model();
			return $model;
 		}

	}

?>

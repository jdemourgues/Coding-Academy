<?php

	class UsersController extends AppController	{

		private $model;

		// load le model associé ici 'User'
		protected function __construct(){
			$this->model = $this->loadModel('User');
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
					header('Location : [Insérer page Login]');
				}
			}
		}

	}
?>

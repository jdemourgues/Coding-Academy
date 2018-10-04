<?php /**
 * Created by PhpStorm.
 * User: Margaux et jdm
 * Created Date: 29/11/17 Time: 14:44
 * Last Updated: 30/11/17 Time: 11:45
*/

class ArticlesController extends AppController

{
	static private $_instance = NULL;

    private function __construct(){
    	$this->model = $this->loadModel('Articles');
    }

    public static function getInstance() {
        if(is_null(self::$_instance))
            self::$_instance = new UsersController();
        return self::$_instance;
    }

   	

	public function createArticle($title, $content, $category = null, $tags = null){
		//verifie s'il y a des erreurs dans le formulaire
		$return = $this->model->errorManagement($title, $content, $category, $tags);
		if ( $return != '' ) {
			 // APPELLE UNE FONCTION DE LA VUE QUI APPELLE LA MEME PAGE + MESSAGE D'ERREUR
		}
		else {
			// création de l'article en base de données
			$count = $this->model->addArticle($title, $content, $category, $tags);
			if ($count > 0) {
				unset($_POST);
				 // APPELLE UNE FONCTION DE LA VUE QUI APPELLE LA MEME PAGE + MESSAGE D'ERREUR
			}
		}
	}

	public function modifyArticle() {
		$return = $this->model->errorManagement($title, $content, $category, $tags);
		if ( $return != '' ) {
			  // APPELLE UNE FONCTION DE LA VUE QUI APPELLE LA MEME PAGE + MESSAGE D'ERREUR
		}
		else {
			// création de l'utilisateur en base de données
			$count = $this->model->ModifyArticle($title, $content, $category, $tags);
			if ($count > 0) {
				unset($_POST);
				// APPELLE UNE FONCTION DE LA VUE QUI APPELLE LA MEME PAGE + MESSAGE D'ERREUR
			}
		}
	}
    public function deleteArticle() {}
    public function displayArticle() {}
    public function filterArticle () {}
    public function sortArticle() {}
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 29/11/17
 * Time: 14:43
 */

class Articles
{
	private $db;

	public function __construct()
    {
        $this->db = DB::getInstance();
    }

    //Récupère les articles de la db
    public function getArticles(){
        $articles = $this->db->getAllData('articles');
        $i = 0;
        foreach ($articles as $value) {
 //       var_dump($value["article_AuthorID"]);
            $authorUsername = $this->db->getData('users', 'user_Name', 'id LIKE '.$value["article_AuthorID"].'');
            $value["article_AuthorUsername"] = $authorUsername[0]['user_Name'];
            $category = $this->db->getData('categories', 'category_Name', 'id = '.$value["article_CategoryID"].'');
            $value["article_CategoryName"] = $category[0]["category_Name"];
            $articles[$i]["article_CategoryName"] =    $value["article_CategoryName"];
            $articles[$i]["article_AuthorUsername"] = $value["article_AuthorUsername"];
            $i++;
        }

        //var_dump($articles);
        return  $articles; 
    }

    //Vérification des erreurs au moment de la création.
    public function errorManagement($title, $content, $category = null, $tags = null){

        $retmsg = '';

        if ((empty($title)) || (strlen($title) < 3) || (strlen($title) > 30)){
        	$retmsg = $retmsg . "Invalid title. Must have between 3 and 30 characters.<br>";
        }
        if (empty($content)){
        	$retmsg = $retmsg . "Invalid content. Must write a content.<br>";
        }
        return $retmsg;
    }

 /*   public function addArticle ($title, $content, $category = null, $tags =null){
    	
    	if ($category != null){
    		$categoryID = $this->$db->$pdo->query("SELECT id FROM categories WHERE category_Name = $category");
    	}

        $authorID = $this->db->getData('', 'category_Name', 'id = $value["article_CategoryID]');
 //       $authorID = $this->$db->$pdo->query("SELECT id FROM users WHERE user_Email = $_SESSION['email']");
    	
    	$modificationDate = date("Y-m-d");

    	$req = $this->$db->$pdo->query("INSERT INTO articles (article_Title, article_Description, article_AuthorID, article_ModificationDate, article_Tags, article_Category) VALUES ('$title', '$content', '$authorID', '$modificationDate', 'article_Tags', '$article_Category'");   
    	return $req; 
    }


    public function ModifyArticle ($title, $content, $category = null, $tags =null){
    	
    	if ($category != null){
    		$categoryID = $this->$db->$pdo->query("SELECT id FROM categories WHERE category_Name = $category");
    	}
    	
    	$authorID = $this->$db->$pdo->query("SELECT id FROM users WHERE user_Email = $_SESSION['email']");
    	
    	$modificationDate = date("Y-m-d");

    	$req = $this->$db->$pdo->query("INSERT INTO articles (article_Title, article_Description, article_AuthorID, article_ModificationDate, article_Tags, article_Category) VALUES ('$title', '$content', '$authorID', '$modificationDate', 'article_Tags', '$article_Category'");   
    	return $req; 
    }


*/
}
<?php

class User {

	private $db;

	// gestion des droits utilisateur
	protected $categoryUser = 0; // 0 = common user, 1 = Writer, 2 = Admin
	protected $banished = 0; // 0 = not banished, 1 = banished

	public function __construct(){
		$this->db = DB::getInstance();
	}

	public function login($u_email, $u_pwd){
		// ici vous devez vérifier qu'il peut se log
	}

	// Vérification des erreurs au moment de la création.
	public function errorManagement($username, $email, $pwd, $pwdconf){

		$retmsg = '';

		if ((empty($username)) OR (strlen($username) < 3) OR (strlen($username) > 10)) {
			$retmsg = $retmsg . "Invalid Unsername. Must have between 3 and 10 characters.<br>";
		}
		if ((empty($email)) OR (preg_match('#^[a-zA-Z0-9]+@[a-zA-Z]{2,}\.[a-z]{2,4}$#', $email) != 1)){
			$retmsg = $retmsg . "Invalid email.<br>";
		}
		if ((empty($pwd))){
			$retmsg = $retmsg . "No password entered.<br>";
		}
		if (strlen($pwd) < 8 OR (strlen($pwd) > 20)){
			$retmsg = $retmsg . "Invalid Password. Must have between 8 and 20 characters.<br>";
		}
		if ((empty($pwdconf)) OR ($pwd != $pwdconf)){
			$retmsg = $retmsg . "Non matching password.<br>";
		}
		return $retmsg;
	}

	// Creation du compte dans la BDD.
	public function registration($u_username, $u_email, $u_pwd){
		// chiffrage du mot de passe, insertion dans la base de données
		$u_h_pwd = hash("sha256", $u_pwd);
		$insert_sql = 'INSERT INTO users (username, password, email, group_id, is_banished) VALUES ("'.$u_username.'", "'.$u_h_pwd.'", "'.$u_email.'", "'.$this->categoryUser.'", "'.$this->banished.'")';
		$count = $this->db->insert($insert_sql);
		return $count;
	}

}

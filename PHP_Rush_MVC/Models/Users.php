<?php
/**
 * Created with PhpStorm.
 * By: Margaux & jdm
 * Date: 30/11/17 Time: 12:21
 * Last modified 30/11/17 14:00
 */

class Users
{
    private $db;

    // gestion des droits utilisateur
    protected $categoryUser = 0; // 0 = common user, 1 = Writer, 2 = Admin
    protected $banished = 0; // 0 = not banished, 1 = banished

    public function __construct()
    {
        $this->db = DB::getInstance();
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
        $u_h_pwd = password_hash($u_pwd, PASSWORD_DEFAULT);
        $date = date("Y-m-d");
        $insert_sql = 'INSERT INTO users (user_Name, user_Email, user_Password, User_ModificationDate) VALUES ("'.$u_username.'", "'.$u_email.'", "'.$u_h_pwd.'", "'.$date.'")';
        $count = $this->db->insert($insert_sql);
        return $count;
    }

    // Vérification des erreurs au moment du login.
    public function errorlogin($email, $pwd){

        $retmsg = '';

        if ((empty($email)) OR (preg_match('#^[a-zA-Z0-9]+@[a-zA-Z]{2,}\.[a-z]{2,4}$#', $email) != 1)){
            $retmsg = "Invalid email or password.<br>";
        }
        else if ((empty($pwd))){
            $retmsg = "Invalid email or password.<br>";
        }
        else if (strlen($pwd) < 8 OR (strlen($pwd) > 20)){
            $retmsg = "Invalid email or password.<br>";
        }
        //envoie les requetes a la bdd pour savoir si ce sont les bons identifiants
        else {
            $reponse = $this->db->getData('users', 'user_Email', "user_Email = '$email'");
            var_dump($reponse);
            if ($reponse == false) {
                $retmsg = $retmsg . "Unknowed email.<br>";
            } else {
                $reponse = $this->db->getData('users', 'user_Password', "user_Email = '$email'");
                var_dump($reponse);
                echo hash("sha256",'$pwd'), $reponse[0]['user_Password'];
                if (!password_verify($pwd, $reponse[0]['user_Password'])) {
                    $retmsg = "invalid password.<br>";
                }
            }
        }
        return $retmsg;
    }

    public function login($u_email, $u_pwd){
        // ici vous devez vérifier qu'il peut se log
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: Margaux et Jerome
 * Created Date: 28/11/17 Time: 10:37
 */

include_once '../../models/todolist_Db.php';
include_once '../../views/todolist/task.php';

class taskcontroller
{
    private $db;

    public function __construct(){
        $this->db = TodoDb::get_Instance();
    }

    public function controlInput()
    {
        if (isset($_POST["task_title"])) {
            $title = $this->secure_input($_POST["task_title"]);
            if ($_POST["task_description"]) {
                $description = $this->secure_input($_POST["task_description"]);
            }
            else
                $description = null;
            $this->db->post_task($title, $description);
            header("http://localhost/PHP_Intro_Rush_MVC/index.php");

        }
        if ($this->db->getTaskAdded() == false) {
            echo "Invalid input - Incorrect title or Description"; //appeler une fonction erreur dans views
        }
    }

    public function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


if (count($_POST) > 0) {
    if (empty($_POST["task_title"]))
        echo "erreur titre vide"; //appeler fonction erreur dans views/task.php
    else {
        $taskControl = new taskcontroller();
        $taskControl->controlInput();
    }
}
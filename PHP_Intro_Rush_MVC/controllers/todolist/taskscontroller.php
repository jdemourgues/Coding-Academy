<?php
/**
 * Created by PhpStorm.
 * Users: Margaux et jerome
 * Created Date: 28/11/17 Time: 10:36
 */

include_once 'models/todolist_Db.php';
include_once 'views/todolist/tasks.php';

class TasksController
{
    private $db;

    public function __construct () {
        $this->db = TodoDb::get_Instance();
    }

// Récupère un array de get_Tasks, le controle, extrait titre, description et retourne un array controlé
    public function controlTasks()
    {
        $tasks = $this->db->get_tasks();
        foreach ($tasks as $value){
            $value['title'] = htmlspecialchars($value['title']);
            $value['description'] = nl2br(htmlspecialchars($value['description']));
        }
        $taskList = TaskList::get_Instance();
        $taskList->displayTasks($tasks);
    }


}





<?php
/**
 * Created by PhpStorm.
 * User: Margaux et Jerome
 * Created Date: 28/11/17 Time: 10:39
 */

class TaskList{

    private static $_instance = null;

    private function construct() {
    }

    public static function get_Instance() {
        if(is_null(self::$_instance))
            self::$_instance = new TaskList();
        return self::$_instance;
    }

    public function displayTasks($tasks){
        foreach ($tasks as $value) {?>
        <div class="trask">
            <class="task-title"><?php echo $value['title'];?>
            <button class="see-more">more</button>
            <button class="edit">edit</button>
            <button class="delete">delete</button>
            </div><?php
        }
    }
}
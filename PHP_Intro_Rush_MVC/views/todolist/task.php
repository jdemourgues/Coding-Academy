<?php
/**
 * Created by PhpStorm.
 * User: Margaux et Jerome
 * Created Date: 28/11/17 Time: 10:39
 */



class Task
{
    public function __construct() {
    }

    public function displayTask($task)
    {
        ?><div class="task" >
        <p class="task-title" ><?php echo $value['title'];?></p>
        <p class="task-description"><?php echo $value['description'];?></p>
        <p> <button class="delete">delete</button></p>
        </div><?php
    }
}
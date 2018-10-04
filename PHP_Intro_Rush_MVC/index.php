<?php
/**
 * Created by PhpStorm.
 * User: Margaux et jerome
 * Created Date: 28/11/17 Time: 15:24
 * Modified:
 */
session_start();
include_once("controllers/todolist/taskscontroller.php");
//include_once ("views/todolist/tasks.php");
include_once ("controllers/todolist/taskcontroller.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>ToDo List</h1>

<?php
$controller = new TasksController();
$controller->controlTasks();
?>
<br>
<form method="post" action="controllers/todolist/taskcontroller.php">
    <input name="task_title" type="text" placeholder="Title" id="task_title" required>
    <input name="task_description" type="textarea" placeholder="Description" id="task_description">
    <input name="submit" type="submit" value="New Task" class="newTask">
</form>
<?php
?>
</body>
</html>

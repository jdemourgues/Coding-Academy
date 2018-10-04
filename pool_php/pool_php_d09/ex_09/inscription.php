<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<form action="" method="POST">
    <p><label>Name :<input type="text" name="name" /></label></p>
    <p><label>E-mail :<input type="text" name="email" /></label></p>
    <p><label>Password :<input type="password" name="password" /></label></p>
    <p><label>Re-type Password :<input type="password" name="password_confirmation" /></label></p>
    <p><input type="submit"/></p>
</form>
<?php
if (!empty($_POST)) {
    if ((strlen($_POST['name']) < 3) OR (strlen($_POST['name']) > 10))
        echo "Invalid Name";
    elseif (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z{2,4}$#", $_POST['email']))
        echo "Invalid email";
    elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10) OR ($_POST['password_confirmation'] != $POST['password']))
        echo "Invalid password or password confirmation ";
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $email = $_POST['email'];
    try {
        $bdd = new PDO("mysql:host='localhost';port='3306';dbname='php_day09_ex09'", 'root', 'root@2017');
    } catch (Exception $e) {
        echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE . "\n";
        $msg = "'" . gmdate('Y-m-d h:i:s \G\M\T', time()) . " : " . $e->getMessage() . "' >>" . ERROR_LOG_FILE;
        shell_exec("echo " . $msg . "");
    }
    $bdd->exec('INSERT INTO users(name, email, password) VALUES (\'$name\',\'$email\',\'$pass\')');
    echo "User created\n";
}
?>
</body>
</html>
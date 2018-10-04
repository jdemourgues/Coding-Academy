<?php
session_start();
$_SESSION['pass']=false;
const ERROR_LOG_FILE = "~/error_log_file.txt";
if (!empty($_POST)) {
    if (!preg_match("#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        echo "Invalid email";
    elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10) OR ($_POST['password_confirmation'] != $_POST['password']))
        echo "Invalid password or password confirmation ";
    else
    {
        //$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        try
        {
            $bdd = new PDO("mysql:host=localhost;port=3306;dbname=php_day09_ex09", 'root', 'root@2017');
            $result= $bdd->query("SELECT password, name from users where email= '$email'");
            $res = $result->fetch();

            if (password_verify($_POST['password'],$res['password'])) {
                $_SESSION['pass'] = true;
                $_SESSION['name'] = $res['name'];
                header('Location:index.php');
            }
            else echo "invalid password\n";
        }
        catch (Exception $e)
        {
            echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE . "\n";
            $msg = "'" . gmdate('Y-m-d h:i:s \G\M\T', time()) . " : " . $e->getMessage() . "' >>" . ERROR_LOG_FILE;
            shell_exec("echo " . $msg . "");
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<form action="" method="POST">
    <p> <label>E-mail : <input type="text" name="email" value=
                            <?php
                            if(!empty($_POST['email']))
                            echo $_POST['email'];
                            ?>
                        >
        </label>
    </p>
    <p><label>Password :<input type="password" name="password" /></label></p>
    <p><label>Re-type Password :<input type="password" name="password_confirmation" /></label></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>
<?php
        session_start();
const ERROR_LOG_FILE = "~/error_log_file.txt";
if (!empty($_POST)) {
    if ((strlen($_POST['name']) < 3) OR (strlen($_POST['name']) > 10))
        echo "Invalid Name";
    elseif (!preg_match("#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        echo "Invalid email";
    elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10) OR ($_POST['password_confirmation'] != $_POST['password']))
        echo "Invalid password or password confirmation ";
    else
    {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $email = $_POST['email'];
        try
        {
            $bdd = new PDO("mysql:host=localhost;port=3306;dbname=php_day09_ex09", 'root', 'root@2017');
            $result=$bdd->query("select * from users where email='$email'");
            $res1 = $result->fetch();
 //          print_r($res1);
            $_POST['name'] = $res1['name'];
            $_POST['email']=$res1['email'];

            $result= $bdd->query("UPDATE users SET 'name =".$_POST['name']."','email=".$_POST['email']." ','password=".$pass."') WHERE email=".$_res1['email']);
 //           if ($result == true)
 //               echo "User created\n";
        }
        catch (Exception $e)
        {
            echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE . "\n";
            $msg = "'" . gmdate('Y-m-d h:i:s \G\M\T', time()) . " : " . $e->getMessage() . "' >>" . ERROR_LOG_FILE;
            shell_exec("echo " . $msg . "");
        }
    }
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<form action="" method="POST">
    <p><label>Name :<input type="text" name="name" value=
                        <?php
                        if(!empty($_POST['name'])){
                            echo $_POST['name'];
                        }
                        ?>
                    >
                    </label></p>
    <p><label>E-mail :  <input type="text" name="email" value=
                            <?php
                            if(!empty($_POST['email']))
                                echo $_POST['email'];
                            ?>
                        >
                        </label></p>
    <p><label>Password :<input type="password" name="password" /></label></p>
    <p><label>Re-type Password :<input type="password" name="password_confirmation" /></label></p>
    <p><input type="submit"/></p>
</form>

</body>
</html>
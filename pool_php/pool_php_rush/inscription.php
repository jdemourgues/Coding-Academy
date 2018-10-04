<?php
/*const ERROR_LOG_FILE = "~/error_log_file.txt";
if (!empty($_POST)) {
    if ((strlen($_POST['username']) < 3) OR (strlen($_POST['username']) > 10))
        echo "Invalid Name";
    elseif (!preg_match("#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        echo "Invalid email";
    elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10) OR ($_POST['password_confirmation'] != $_POST['password']))
        echo "Invalid password or password confirmation";
    else {
        $email = $_POST['email'];
        $bdd1 = new PDO("mysql:host=localhost;port=3306;dbname=pool_php_rush", 'root', 'root@2017');
        $result1 = $bdd1->query("SELECT * from users WHERE email='$email'");
        $res1=$result1->fetch();
        if ($res1)
            echo "User email already registred";
        else {
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $name = $_POST['username'];
            $email = $_POST['email'];
            try {
                $bdd = new PDO("mysql:host=localhost;port=3306;dbname=pool_php_rush", 'root', 'root@2017');
                $result = $bdd->query("INSERT INTO users(username, email, password) VALUES ('" . $name . "','" . $email . "','" . $pass . "')");
                if ($result == true) {
                //      echo "User created\n";
                    header('Location:login.php');
                }
            } catch (Exception $e) {
                echo 'PDO ERROR:' . $e->getMessage() . 'storage in ' . ERROR_LOG_FILE . "\n";
                $msg = "'" . gmdate('Y-m-d h:i:s \G\M\T', time()) . " : " . $e->getMessage() . "' >>" . ERROR_LOG_FILE;
                shell_exec("echo " . $msg . "");
            }
        }

    }
}*/
?><!DOCTYPE html>
  <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <h1> JEROME & CEDRIC</h1>
            <p> Les Spécialistes du jouet exotique pour adultes</p>
        </header>
        <a href="./login.php">Login<br></a>
        <footer>
            <p> Contact : jerome-et-cedric@lululamorue.com </p>
        </footer>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
    </head>
    </html>
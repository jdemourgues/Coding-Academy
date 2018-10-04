<?php
session_start();
if (isset($_COOKIE['pass']))
    $_SESSION['pass'] = $_COOKIE['pass'];
    $_SESSION['name'] = $_COOKIE['name'];
if(!$_SESSION['pass']==true)
    header('Location:login.php');
else
    echo "Hello ".$_SESSION['name']."\n\n";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <br>
        <a href="./logout.php">logout<br></a>
    </body>
    </head>
    </html>
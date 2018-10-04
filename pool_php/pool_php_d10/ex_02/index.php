<?php
session_start();
if($_SESSION['pass']==true)
    echo "Hello ".$_SESSION['name'];
else header('Location:login.php');
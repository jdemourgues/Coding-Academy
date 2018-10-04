<?php
session_start();
if (!empty($_GET['name'])) {
    $_SESSION['name'] = $_GET['name'];
    echo "Hello " . $_GET['name'];
}
elseif (!empty($_SESSION['name'])) {
    echo "Hello " . $_SESSION['name'];
}
    else
    echo "Hello platypus";
?>
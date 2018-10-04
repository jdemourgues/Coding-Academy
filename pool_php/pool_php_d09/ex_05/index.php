<?php
if (isset($_GET['name'])) {
    setcookie('name', $_GET['name'], time() + 600);
    echo "Hello " . $_GET['name'];
}
elseif (isset($_COOKIE['name'])) {
    echo "Hello " .$_COOKIE['name'];
}
    else
    echo "Hello platypus";
?>
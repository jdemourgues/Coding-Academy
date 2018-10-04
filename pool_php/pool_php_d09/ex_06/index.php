<?php
include_once ("ex_06.php");
setcookie('name',"Jerome",time() + 3600);
remove_cookie($_GET['cookieName']);


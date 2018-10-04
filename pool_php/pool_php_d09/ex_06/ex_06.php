<?php
    function remove_cookie($cookie_name)
    {
        setcookie($cookie_name);
    }
//setcookie('name',"Jerome",time() + 3600);
//remove_cookie($_GET['cookieName']);

?>
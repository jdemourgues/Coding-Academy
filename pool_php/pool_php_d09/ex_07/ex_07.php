<?php
function modify_coockie($cookieName, $cookieValue)
{
        setcookie($cookieName, $cookieValue, time() + 600);
}
//setcookie('name',"Jerome",time() + 3600);
//modify_coockie('name', 'Laurent');
?>
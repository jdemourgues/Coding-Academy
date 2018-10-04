<?php
/**
 * Created by PhpStorm.
 * User: Margaux & jdm
 * Date: 29/11/17 Time: 20:34
 * Last Updated: 30/11/17 11:45
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="/PHP_Rush_MVC/users/controlregister/" id="register" class="register">
    <input type="text" name="user_Name" id="user_Name" placeholder="Username" required>
    <input type="text" name="user_Mail" id="user_Mail" placeholder="E-Mail" required>
    <input type="password" name="user_Pwd" id="user_Pwd" placeholder="Password" required>
    <input type="password" name="user_PwdConf" id="user_PwdConf" placeholder="Re-type Password" required>
    <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>

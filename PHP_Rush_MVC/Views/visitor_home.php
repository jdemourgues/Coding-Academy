<?php
/**
 * Created with PhpStorm.
 * by: Margaux & jdm
 * Date: 30/11/17 Time: 19:54
 * Last modified 30/11/17 20:00
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    visitor_home
	<form method="post" action="/PHP_Rush_MVC/users/controllogin/">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="login">
    </form>
	<a href="/PHP_Rush_MVC/views/displayregister/"><button>REGISTER</button></a>
    <br>
</header>
<main>
	<?php
		$viewsctlr = ViewsController::getInstance();
		$viewsctlr->displayArticles();
	 ?>
</main>
<footer>

</footer>
</body>
</html>

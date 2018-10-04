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
	<a href="/PHP_Rush_MVC/views/displayLogin/"><button>LOG OUT</button></a>
	<a href="/PHP_Rush_MVC/views/displayArticleSettings/"><button>ARTCILE SETTINGS</button></a>
	<a href="/PHP_Rush_MVC/views/displayAccountSettings/"><button>ACCOUNT SETTINGS</button></a>
	<a href="/PHP_Rush_MVC/views/displayNewArticle/"><button>NEW ARTICLE</button></a>
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

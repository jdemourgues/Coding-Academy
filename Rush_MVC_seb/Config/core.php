<?php

	// Le core.php va initialiser tous les Controllers, Database, Dispatcher, routes...

	spl_autoload_register(function ($class) {
		$source = "../Controllers/" . $class . ".php";
		if (file_exists($source)) {
			require_once $source;
		}
	});
	require_once '../dispatcher.php';
	require_once '../Src/router.php';

?>

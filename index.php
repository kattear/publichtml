<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = '404';
	}
	// echo $page;
	$path = 'pages/' . $page . '.php';

	/*if requested file does not exist*/
	if (!file_exists($path)) {
		$page = '404';
		$path = 'pages/404.php';
	}

	include 'includes/header.php';
	include $path;
	include 'includes/footer.php';
?>
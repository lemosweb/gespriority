<?php 	

	$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	include 'View/header.php';


	if ($url == '/') {
		
		include 'View/login.php';

	}else if ($url == '/admin') {
		
		include 'View/admin.php';

	}else if ($url == '/user') {

		include 'View/user.php';

	}else{

		include 'View/404.php';

	}


	include 'View/footer.php';

	
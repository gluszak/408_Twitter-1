<?php

session_start();
require_once 'src/User.php';
require_once 'src/connection.php';


if(!isset($_SESSION['loggedUserId'])) {
	header("Location: login.php");
}

?>

<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		Logged user: 
		<?php
			$loggedUser = new User();
			$loggedUser->loadFromDB($conn, $_SESSION['loggedUserId']);
			$loggedUser->show();
		?>
		<br />
		<a href="logout.php">Logout</a>	
	</body>
</html>

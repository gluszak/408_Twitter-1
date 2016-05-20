<?php

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "Twitter";

//Tworzenie nowego połączenia:
$conn = new mysqli($servername, $username, $password, $baseName);

//Sprawdzamy, czy połączenie się udało:
if($conn->connect_error) {
	die("Połączenie nieudane. Błąd: ".$conn->connect_error);
} else {
	$conn->set_charset("utf8");
	//echo "Połączenie udane<br />";
}
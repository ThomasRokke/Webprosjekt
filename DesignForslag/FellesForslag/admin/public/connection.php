<?php
// Jeg definerer verdiene siden de aldri skal byttes
    define("DB_SERVER", "localhost");
	define("DB_USER", "my_cms");
	define("DB_PASS", "webprosjekt");
	define("DB_NAME", "wzup");

//mysqli
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) 
{
	header('HTTP/1.1 500 Error: Kan ikke koble til database!'); 
	exit();
}

?>
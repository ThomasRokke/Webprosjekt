<?php

    
/*
DEFINE('DB_USER', 'roktho16_thomas');
DEFINE('DB_PASSWORD', 'MU8GTHJBXE66');
DEFINE('DB_HOST', 'localhost:3306');
DEFINE('DB_NAME', 'roktho16_wzup');

*/

DEFINE('DB_USER', 'my_cms');
DEFINE('DB_PASSWORD', 'webprosjekt');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'wzup');



$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

    OR die('Kunne ikke koble til databasen!' . mysqli_connect_error());  








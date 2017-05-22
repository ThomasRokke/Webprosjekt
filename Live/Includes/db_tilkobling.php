<?php
    
DEFINE('DB_USER', 'my_cms');
DEFINE('DB_PASSWORD', 'webprosjekt');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'my_company');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Kunne ikke koble til databasen!' . mysqli_connect_error());  




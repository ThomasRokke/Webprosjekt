<?php

    

DEFINE('DB_USER', 'roktho16_thomas');
DEFINE('DB_PASSWORD', '********'); //Fjernet av sikkerhetsmessige årsaker.
DEFINE('DB_HOST', 'localhost:3306');
DEFINE('DB_NAME', 'roktho16_wzup');


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

    OR die('Kunne ikke koble til databasen!' . mysqli_connect_error());  








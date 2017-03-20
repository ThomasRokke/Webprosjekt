<?php 
    // 1 . Create a database connection 

    $dbhost = "127.0.0.1"; //hvilken host. I dette tilfelelt kjører jeg server på lokalhost ^ 
    $dbuser = "my_cms"; //brukernavn du har brukt
    $dbpass = "webprosjekt"; //passord du har brukt på mysql
    $dbname = "my_company";
    $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    
    // Test if connection occured

    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() . 
            " (" . mysqli_connect_errno() . ")");    
    }
?>
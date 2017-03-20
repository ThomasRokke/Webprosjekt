<?php 
    // 1 . Create a database connection 

    //Definerer variablene som constant. Vi kommer ikke til å endre på disse. 
    define("DB_SERVER", "127.0.0.1");
    define("DB_USER", "my_cms");
    define("DB_PASS", "webprosjekt");
    define("DB_NAME", "my_company");
        
    //oppretter en connection
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    // Test if connection occured

    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() . 
            " (" . mysqli_connect_errno() . ")");    
    }

    

?>
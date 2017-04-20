<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "my_cms");
	define("DB_PASS", "webprosjekt");
	define("DB_NAME", "my_company");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

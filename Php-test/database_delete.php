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
<?php 
    // 2. Perform database query - DELEE 
    
    // Often these are form values
    $id = 6; //hvilken id de har. 

    // .= blir det samme som å legge sammen queryen.

    $query  = "DELETE FROM subjects ";
    $query .= " WHERE ID = {$id} ";
    $query .= " LIMIT 1";

    
   
    $result = mysqli_query($connection, $query);
    //result er en 'resource'

    //test if there was a querry error
    if($result && mysqli_affected_rows($connection) == 1) {
        // Success
        // recurect_to("somepage.php"); 
        echo "Success!"; 
    }
    else{
        // Failure
        // $message = "Subject creation failed"
        
        die("Database delte has failed " . mysqli_error($connection)); 
    }
    
    
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Basic html</title>

</head>
<body>
  
  

</body>
</html>

<?php 
    // 5. Close database connection 
    mysqli_close($connection); 

?>


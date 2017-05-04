<?php 

require 'method.php'; 

echo 'Liste over data:'; 

foreach($_POST AS $key => $value){

    echo'<br>'; 
    
    echo $key . ' --->' . $value; 
    
    
    
}
?>
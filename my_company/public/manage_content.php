<?php require_once("../includes/db_connection.php"); ?>


<?php require_once("../includes/functions.php") ?>

<?php 
    //2. Perform database query

    // .= blir det samme som å legge sammen queryen.

    $query  = "SELECT * ";
    $query .= "FROM subjects ";
   
    $result = mysqli_query($connection, $query);
    //result er en 'resource'

    //test if there was a querry error
    if(!$result) {
        die("Database query has failed"); 
    }    
?>

<?php include("../includes/layouts/header.php"); ?>


<div id="main">
        <div id="navigation">
            <ul class="subjects">
                <?php

                // 3. use returned data (if any)

                //it's not an php array . it mysql result set. 
                //Den incrementer row'en for oss.  Derfor funker ikke foreach
                //foreach - den prøver incremente 'pointeren'

                while($subject = mysqli_fetch_assoc($result)) { 

                ?>

                <li><?php echo $subject["menu_name"];// . " (" . 
                    //$subject["id"] . ")"; ?></li>     

               <?php
                } //avslutter while løkka. 
                ?>
    
            </ul>
            
        </div>
        <div id="page">
            <h2>Manage content</h2>
            
       
        </div>
    </div>

<?php 
        //4. Release returned data
        mysqli_free_result($result); 
    
?>

<?php include("../includes/layouts/footer.php"); ?>